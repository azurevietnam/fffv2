<?php

namespace App\Http\Controllers\Auth;

use Validator;
use Mailjet;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Repositories\UserRepository;
use App\Notifications\ConfirmEmail;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    use RegistersUsers;

    /**
     * Create a new controller instance
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Handle a registration request for the application
     *
     * @param  \App\Http\Requests\Auth\RegisterRequest $request
     * @param  \App\Repositories\UserRepository $userRepository
     * @return \Illuminate\Http\Response
     */
    public function register(RegisterRequest $request, UserRepository $userRepository)
    {
        $input = $request->all();
        $rules = [
            'fullname' => 'required|max:30',
            'email' => 'required|email|max:255',
            'phone' => 'required|numeric',
            'password' => 'required|between:6,20',
            'confirm_password' => 'required|between:6,20',
            'agreement' => 'required',
        ];
        $messages = [
            'fullname.required' => 'Vui lòng điền Họ và tên.',
            'email.required' => 'Để đăng ký tài khoản, bạn vui lòng điền email.',
            'phone.required' => 'Vui lòng nhập SĐT.',
            'password.required' => 'Vui lòng điền Mật khẩu.',
            'confirm_password.required' => 'Vui lòng điền Mật khẩu nhập lại.',
            'agreement.required' => 'Bạn chưa đồng ý điều khoản và điều lệ của fff.com.vn.',
            'between' => 'Password từ :min đến :max ký tự.',
            'phone.numeric' => 'SĐT phải là số .',
        ];

        $validator = Validator::make($input, $rules, $messages);
        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        } else {
            //$utm_medium = isset($_COOKIE['utm_medium']) ? $_COOKIE['utm_medium']: $this->session->userdata('utm_medium');
            //$utm_source = isset($_COOKIE['utm_source']) ? $_COOKIE['utm_source']: $this->session->userdata('utm_source');
            //$referer  = $this->session->userdata('referer');
            $utm_medium = "";
            $utm_source = "";
            $referer = "";

            $fullname = trim(addslashes($request->input('fullname', '')));
            $email = trim(strtolower(addslashes($request->input('email', ''))));
            $phone = trim(strtolower(addslashes($request->input('phone', ''))));
            $password = trim(strtolower(addslashes($request->input('password', ''))));
            $confirm_password = trim(strtolower(addslashes($request->input('confirm_password', ''))));
            //$website      = trim(strtolower(addslashes($request->input('website', ''))));


            $user_skype = trim(strtolower(addslashes($request->input('user_skype', ''))));
            $user_yahoo = trim(strtolower(addslashes($request->input('user_yahoo', ''))));
            $user_facebook = trim(strtolower(addslashes($request->input('user_facebook', ''))));
            ////////////////////////////////
            $user = DB::table('users')->where('email', $email)->first();
            if ($user) {
                $validator->getMessageBag()->add('email', "Email này đã đăng ký rồi");
                return back()->withInput()->withErrors($validator);
            }
            if ($password != $confirm_password) {
                $validator->getMessageBag()->add('confirm_password', "Mật khẩu nhập lại không khớp.");
                return back()->withInput()->withErrors($validator);
            }

            $dataIns = array(
                'email' => $email,
                'password' => bcrypt($password),
                'phone' => $phone,
                'user_skype' => $user_skype,
                'user_facebook' => $user_facebook,
                'user_yahoo' => $user_yahoo,
                'fullname' => $fullname,
                'registed_ip' => $this->getIP(),
                'confirmation_code' => str_random(10),
                'utm_source' => $utm_source,
                'utm_medium' => $utm_medium,
                'referer' => strtolower($referer),
                'status' => 0,
                'created' => date('Y-m-d H:i:s', time())
            );

            $id =DB::table('users')->insertGetId($dataIns);
            $user = $userRepository->getById($id);

                //$user = $userRepository->store(
            //    $dataIns,
            //    str_random(10)
            //);

            $this->notifyUser($user);

            return redirect('/login')->with('ok', trans('front/verify.message') . $email);
        }
    }

    public function getIP()
    {
        if (array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER)) {
            $ip = explode(',', $_SERVER["HTTP_X_FORWARDED_FOR"]);
            return $ip[0];
        } else if (array_key_exists('REMOTE_ADDR', $_SERVER)) {
            return $_SERVER["REMOTE_ADDR"];
        } else if (array_key_exists('HTTP_CLIENT_IP', $_SERVER)) {
            return $_SERVER["HTTP_CLIENT_IP"];
        }

        return '';
    }

    /**
     * Handle a confirmation request
     *
     * @param  \App\Repositories\UserRepository $userRepository
     * @param  string $confirmation_code
     * @return \Illuminate\Http\Response
     */
    public function confirm(UserRepository $userRepository, $confirmation_code)
    {
        $userRepository->confirm($confirmation_code);

        return redirect('/')->with('ok', trans('front/verify.success'));
    }

    /**
     * Handle a resend request
     *
     * @param  \App\Repositories\UserRepository $userRepository
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function resend(UserRepository $userRepository, Request $request)
    {
        if ($request->session()->has('user_id')) {
            $user = $userRepository->getById($request->session()->get('user_id'));
            $this->notifyUser($user);
            return redirect('/login')->with('ok', trans('front/verify.resend') . $user->email);
        }

        return redirect('/');
    }

    /**
     * Notify user with email
     *
     * @param  \App\Models\User $user
     * @return void
     */
    protected function notifyUser(User $user)
    {
        //$user->notify(new ConfirmEmail($user->confirmation_code));
        $view = view('emails.resend-active-account',
            ['title'=>trans('front/verify.email-title'),
                'body' => trans('front/verify.email-intro') . ". " . trans('front/verify.email-button') . ". " . url('confirm/' . $user->confirmation_code)
            ]);
        $params = [
            "method" => "POST",
            "from" => "FFF.com.vn <noreply@fff.com.vn>",
            "to" => "hiepphatnguyen@gmail.com",
            "subject" => trans('front/verify.email-title'),
            //"txt" => trans('front/verify.email-title') . "<br/>" . trans('front/verify.email-intro') . "<br/>" . trans('front/verify.email-button') . "<br/>" . url('confirm/' . $user->confirmation_code)
            //"html" => $view
            "html" => trans('front/verify.email-title') . "<br/>" . trans('front/verify.email-intro') . "<br/>" . trans('front/verify.email-button') . "<br/>" . url('confirm/' . $user->confirmation_code)
        ];

        $result = Mailjet::sendEmail($params);



//        return (new MailMessage)
//            ->line([
//                trans('front/password.email-intro'),
//                trans('front/password.email-click'),
//            ])
//            ->action(trans('front/password.email-button'), url('password/reset', $this->token))
//            ->line(trans('front/password.email-end'));
    }
}