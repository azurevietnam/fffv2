<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use UnexpectedValueException;
use Illuminate\Http\Request;
use DB;
use Mailjet;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }


    public function sendResetLinkEmail(Request $request)
    {
        $this->validate($request, ['email' => 'required|email']);

        $user = DB::table("users")->where('email', '=', $request->email)->first();
        if($user) {
            $token = str_random(60);
            $password_resets = DB::table("password_resets")->where('email', $request->email)->first();
            if($password_resets) {
                $token = $password_resets->token;
            } else {
                $dataIns = array(
                    'email' => $request->email,
                    'token' => $token,
                    'created_at' => date('Y-m-d H:i:s', time())
                );
                DB::table('password_resets')->insert($dataIns);
            }
            $params = [
                "method" => "POST",
                "from" => "FFF.com.vn <noreply@fff.com.vn>",
                "to" => $request->email,
                "subject" => trans('front/password.title'),
                "html" => trans('front/password.email-click') . "<br/>" . url('password/reset', $token) . "<br/>" .trans('front/password.email-end')
            ];
            $result = Mailjet::sendEmail($params);
            return redirect('/login')->with('ok', trans('front/password.email-send') . $request->email);
        } else {
            session()->flash('message', 'Không tìm thấy Email trong hệ thống');
            return redirect('error-message');
        }
    }
}
