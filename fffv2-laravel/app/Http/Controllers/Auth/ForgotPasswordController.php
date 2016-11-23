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
            $view = view('emails.reset-password',
                [
                    'mail_title'=> 'CRM FFF.com.vn hướng dẫn đặt lại mật khẩu',
                    'mail_dear'=> 'Xin chào Quý khách hàng,',
                    'mail_desc'=> 'Dưới đây là hướng dẫn đặt lại mật khẩu.',
                    'mail_body'=> 'Yêu cầu thiết lập lại mật khẩu của bạn đã được thực hiện. Nếu bạn không thực hiện yêu cầu này, chỉ cần bỏ qua email này. Nếu bạn đã thực hiện yêu cầu này, xin vui lòng thiết lập lại mật khẩu của bạn:',
                    'mail_button_text'=> 'Mật khẩu mới',
                    'mail_button_link'=> url('/password/reset', $token),
                    'mail_thanks'=> '- Trân trọng (FFF team)',
                    'mail_notes'=> 'Nếu nút ở trên không hoạt động, hãy thử sao chép và dán URL vào trình duyệt của bạn. Nếu bạn tiếp tục có vấn đề, xin vui lòng liên hệ với chúng tôi tại crm@fff.com.vn',
                ]);
            $params = [
                "method" => "POST",
                "from" => "FFF.com.vn <crm@fff.com.vn>",
                "to" => $request->email,
                "subject" => 'Lấy lại mật khẩu FFF.com.vn', //trans('front/password.title')
                "html" => $view
            ];
            $result = Mailjet::sendEmail($params);
            return redirect('/login')->with('ok', trans('front/password.email-send') . $request->email);
        } else {
            session()->flash('message', 'Không tìm thấy Email trong hệ thống');
            return redirect('error-message');
        }
    }
}
