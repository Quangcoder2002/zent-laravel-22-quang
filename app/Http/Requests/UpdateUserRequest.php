<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'name' => 'min:4|max:255',
            'phone' => 'regex:/(0)(\d{9})$/|min:10',
            'email' => 'regex:/^.+@.+$/i',
            'avatar' => 'file|mimes:jpg,bmp,png|max:3072',
        ];
    }
    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => ':attribute bắt buộc phải có.',
            'name.min' => [
                'string' => ':attribute phải có :min kí tự trở lên.',
            ], 
            'avatar.mimes' => ':attribute không phải file ảnh. File ảnh gồm các định dạng: :values.',
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
            'name' => 'Họ tên',
            'phone' => 'Số điện thoại',
            'avatar' => 'File',
        ];
    }
}
