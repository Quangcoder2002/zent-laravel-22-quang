<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'title' => 'required|unique:posts|min:20|max:255',
            'short_content' => 'required',
            'content' => 'required',
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
            'title.required' => ':attribute bắt buộc phải có.',
            'title.min' => [
                'string' => ':attribute phải có :min kí tự trở lên.',
            ], 
            'short_content.required' => ':attribute bắt buộc phải có.',
            'content.required' => ':attribute bắt buộc phải có.',
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
            'title' => 'Tiêu đề',
            'short_content' => 'Mô tả',
            'content' => 'Nội dung',
        ];
    }
}
