<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisteredRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:users|max:255',
            'email' => 'required|unique:users|max:255',
            'password' => 'required|confirmed|min:8|max:255',
            'password_confirmation' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập :attribute.',
            'email.required' => 'Vui lòng nhập :attribute.',
            'password.required' => 'Vui lòng nhập :attribute.',
            'password.min' => [
                'string' => ':attribute phải có :min kí tự trở lên.',
            ],
            'confirmed' => ':attribute xác nhận không khớp',
            'password_confirmation.required' => 'Vui lòng nhập :attribute.',
        ];
    }
    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'name' => 'tên',
            'email' => 'email',
            'password' => 'Mật khẩu',
            'password_confirmation' => 'xác nhận mật khẩu'
        ];
    }
}
