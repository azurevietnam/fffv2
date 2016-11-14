<?php

namespace App\Http\Requests\Auth;

use App\Http\Requests\Request;

class RegisterRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
//            'fullname' => 'bail|required|max:30',
//            'email' => 'bail|required|email|max:255',
//            'phone' => 'bail|required|numeric',
//            'password' => 'bail|required|min:6',
//            'confirm_password' => 'bail|required|min:6',
        ];
    }

    public function messages()
    {
        return [
//            'fullname.required' => 'Vui lòng nhập Họ và tên.',
//            'email.required' => 'Vui lòng nhập Email.',
//            'phone.required' => 'Vui lòng nhập SĐT.',
//            'password.required' => 'Vui lòng nhập Mật khẩu.',
//            'confirm_password.required' => 'Vui lòng nhập Mật khẩu nhập lại.',
//            'min' => ':attribute phải dài hơn :min ký tự.',
//            'max' => ':attribute phải ngắn hơn :max ký tự.',
//            'phone.numeric' => 'SĐT phải là số .',
        ];
    }
}
