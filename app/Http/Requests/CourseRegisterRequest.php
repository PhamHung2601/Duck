<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class CourseRegisterRequest
 * @package App\Http\Requests
 */
class CourseRegisterRequest extends FormRequest
{
    /**
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required|email|unique:course_register,email',
            'name'=>'required',
            'phone'=>'required'
        ];

    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'email.required' => 'Vui lòng nhập email!',
            'email.email' => 'Email không hợp lệ!',
            'email.unique' => 'Email đã tồn tại, vui lòng thử lai với email khác!',
            'name.required' => 'Vui lòng nhập tên của bạn!',
            'phone.required' => 'Vui lòng nhập số điện thoại của bạn!'
        ];

    }
}
