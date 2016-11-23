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
            'fullname' => 'required',
            'email' => 'required|email',
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
            'phone.numeric' => 'SĐT phải là số.',
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
                'fullname' => $fullname,
                'registed_ip' => $request->getClientIp(),//$this->getIP(),
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

            $this->notifyConfirmAccount($user);

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
        $user = $userRepository->confirm($confirmation_code);
        if ($user) {
            $this->notifyTrialService($user);
            return redirect('/login')->with('ok', trans('front/verify.success'));
        } else {
            return redirect('/register')->with('error', 'Không tìm thấy mã confirm, Vui lòng kiểm tra lại email.');
        }
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
            $this->notifyConfirmAccount($user);
            return redirect('/login')->with('ok', trans('front/verify.resend') . $user->email);
        }

        return redirect('/');
    }

    protected function notifyConfirmAccount(User $user)
    {
        $view = view('emails.account-confirm',
            [
                'mail_title'=> 'CRM FFF.com.vn hướng dẫn xác nhận tài khoản',
                'mail_dear'=> 'Xin chào Quý khách hàng,',
                'mail_welcome'=> 'Chào mừng bạn đến với CRM của FFF.com.vn',
                'mail_desc'=> 'Hãy xác minh tài khoản của bạn để bắt đầu',
                'mail_body'=> 'Cảm ơn bạn đã đăng ký dịch vụ của chúng tôi. Để chắc chắn bạn đăng kí đúng email vui lòng xác minh tài khoản và địa chỉ email của bạn. Sau khi xác minh bạn sẽ sẵn sàng để thử nghiệm tất cả các dịch vụ của chúng tôi',
                'mail_button_text'=> 'Xác minh tài khoản',
                'mail_button_link'=> url('/confirm' , $user->confirmation_code),
                'mail_thanks'=> '- Trân trọng (FFF team)',
                'mail_notes'=> 'Nếu nút ở trên không hoạt động, hãy thử sao chép và dán URL vào trình duyệt của bạn. Nếu bạn tiếp tục có vấn đề, xin vui lòng liên hệ với chúng tôi tại crm@fff.com.vn',
            ]);
        $params = [
            "method" => "POST",
            "from" => "FFF.com.vn <crm@fff.com.vn>",
            "to" => 'hiepphatnguyen@gmail.com',
            "subject" => 'Xác minh tài khoản FFF.com.vn', //trans('front/password.title')
            "html" => $view
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

    protected function notifyTrialService(User $user)
    {
        $date_expired = date('Y-m-d', strtotime("+7 days"));
        $view = view('emails.trial-service',
            [
                'mail_title'=> 'CRM FFF.com.vn 7 ngày dùng thử dịch vụ',
                'mail_dear'=> 'Xin chào Quý khách hàng,',
                'mail_welcome'=> 'Chào mừng bạn đến với CRM của FFF.com.vn',
                'mail_desc'=> 'Miễn phí sử dụng dịch vụ FFF.com.vn trong 7 ngày',
                'mail_body'=> 'Cảm ơn bạn đã đăng ký dịch vụ của chúng tôi. Hãy đăng nhập ngay để sử dụng tất cả dịch vụ của FFF.com.vn miễn phí 7 ngày',
                'mail_expired_text'=> 'Sử dụng thử đến hết ngày',
                'mail_expired_date'=> $date_expired,
                'mail_button_text'=> 'Dùng thử ngay',
                'mail_button_link'=> url('/'),
                'mail_thanks'=> '- Trân trọng (FFF team)',
                'mail_notes'=> 'Nếu bạn có bất kỳ câu hỏi nào, xin vui lòng liên hệ với chúng tôi tại crm@fff.com.vn',
            ]);
        $params = [
            "method" => "POST",
            "from" => "FFF.com.vn <crm@fff.com.vn>",
            "to" => 'hiepphatnguyen@gmail.com',
            "subject" => 'Miễn phí dùng thử FFF.com.vn', //trans('front/password.title')
            "html" => $view
        ];
        $result = Mailjet::sendEmail($params);
    }
}