<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email' => 'required|email|min:6',
            'password' => 'required|min:8'
        ];
    }
    public function messages() {
        return [
            'required' => ':attribute không được để trống',
            'min' => ':attribute phải lớn hơn :min ký tự',
            'email' => 'Chưa đúng định dạng email'
        ];
    }
    public function attributes() {
        return [
            'email' => 'Email',
            'password' => 'Mật khẩu'
        ];
       
    }
}
