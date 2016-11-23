<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use Validator;
use DB;
use Auth;
use Redirect;
use Session;

class ProfileController extends Controller
{
    public function __construct()
    {
        //$this->middleware('admin');
    }
    /**
     * Display the home page.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        //return view('front.virtualclicks.virtualclicks');
    }

    public function profile()
    {
        return view('front.profile.taikhoan')->with('user', Auth::user());
    }

    public function post_profile(Request $request) {
        $input = $request->all();
        if($request->has('account_info')) {

            $rules = [
                'email' => 'required|email',
                'password' => 'between:6,20',
                'new_password' => 'between:6,20'
            ];
            $messages = [
                'email.required' => 'Vui lòng điền email.',
                'between' => 'Password từ :min đến :max ký tự.',
            ];

            $validator = Validator::make($input, $rules, $messages);
            if ($validator->fails()) {
                return back()->withInput()->withErrors($validator);
            } else {
                $email = trim(strtolower(addslashes($request->input('email', ''))));
                $password = trim(strtolower(addslashes($request->input('password', ''))));
                $new_password = trim(strtolower(addslashes($request->input('new_password', ''))));
                $address = trim(strtolower(addslashes($request->input('address', ''))));




                $dataIns = array();
                $dataIns['email'] = $email;
                $dataIns['address'] = $address;

                if($password != "") {
                    $credentials = [
                        'email'  => $request->user()->email,
                        'password'  => $password,
                    ];
                    if (!auth()->validate($credentials)) {
                        $validator->getMessageBag()->add('password', "Mật khẩu cũ không chính xác.");
                        return back()->withInput()->withErrors($validator);
                    } else {
                        $dataIns['password'] = bcrypt($new_password);
                    }

                }
                DB::table("users")->where('id', '=', $request->user()->id)->update($dataIns);
                return Redirect::back()->with('ok','Đã cập nhật thành công!');
            }
        } else if($request->has('account_contact')) {
            $rules = [
                'phone' => 'numeric',
            ];
            $messages = [
                'phone.numeric' => 'SĐT phải là số.',
            ];

            $validator = Validator::make($input, $rules, $messages);
            if ($validator->fails()) {
                return back()->withInput()->withErrors($validator);
            } else {
                $phone = trim(strtolower(addslashes($request->input('phone', ''))));
                $user_skype = trim(strtolower(addslashes($request->input('user_skype', ''))));
                $user_yahoo = trim(strtolower(addslashes($request->input('user_yahoo', ''))));
                $user_facebook = trim(strtolower(addslashes($request->input('user_facebook', ''))));
                $user_zalo = trim(strtolower(addslashes($request->input('user_zalo', ''))));

                $dataIns = array();
                $dataIns['phone'] = $phone;
                $dataIns['user_yahoo'] = $user_yahoo;
                $dataIns['user_facebook'] = $user_facebook;
                $dataIns['user_skype'] = $user_skype;
                $dataIns['user_zalo'] = $user_zalo;
                DB::table("users")->where('id', '=', $request->user()->id)->update($dataIns);
                return Redirect::back()->with('ok','Đã cập nhật thành công!');
            }
        } else {
            echo "exit";die;
            return Redirect::back();
        }
    }
}
