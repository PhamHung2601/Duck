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
            'email' => 'required|email',
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
            'email.required' => 'Email is required!',
            'email.email' => 'Invalid email!',
            'name.required' => 'Name is required!',
            'phone.required' => 'Phone is required!'
        ];

    }
}
