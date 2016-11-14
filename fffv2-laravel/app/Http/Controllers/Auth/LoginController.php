<?php

namespace App\Http\Controllers\Auth;

use Validator;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    /**
     * Handle a login request to the application
     *
     * @param  \App\Http\Requests\LoginRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function login(LoginRequest $request)
    {
        $memory  = $request->has('memory');
        if ($lockedOut = $this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return back()->withInput()
                ->with('error', trans('front/login.maxattempt'))->with('memory', $memory)
                ->withInput($request->only('log'));
        }

        $input = $request->all();
        $rules = [
            'email' => 'required|email',
            'password' => 'required',
        ];
        $messages = [
            'email.required' => 'Để đăng ký tài khoản, bạn vui lòng điền email.',
            'password.required' => 'Vui lòng điền Mật khẩu.',
        ];

        $validator = Validator::make($input, $rules, $messages);
        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator)->with('memory', $memory);
        } else {

            $credentials = [
                'email'  => $request->input('email'),
                'password'  => $request->input('password'),
            ];

            if (!auth()->validate($credentials)) {
                if (! $lockedOut) {
                    $this->incrementLoginAttempts($request);
                }

                return back()->withInput()->withErrors($validator)
                    ->with('error', trans('front/login.credentials'))->with('memory', $memory);
            }

            $user = auth()->getLastAttempted();

            if ($user->confirmed) {
                if (! $lockedOut) {
                    $this->incrementLoginAttempts($request);
                }

                auth()->login($user, $request->has('memory'));

                if ($request->session()->has('user_id')) {
                    $request->session()->forget('user_id');
                }

                return redirect('/');
            }

            $request->session()->put('user_id', $user->id);
            return back()->withInput()->withErrors($validator)->with('error', trans('front/verify.again'))->with('memory', $memory);
        }
    }
}
