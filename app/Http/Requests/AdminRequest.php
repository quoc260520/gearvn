<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
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
    public function rules(){
        return [
             'name' => 'required|min:10',
             'email' => 'required|min:10|unique:users,email',
             'password' => 'required|min:8',
             'date_of_birth' => 'required|date',
             'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ];
    }
    public function messages() {
        return [
            'required' => ':attribute không được để trống',
            'min' => ':attribute phải lớn hơn :min ký tự',
            'image' => 'File phải là ảnh',
            'mimes:jpg,png,jpeg,gif,svg' => 'File phải là ảnh',
            'unique' => ':attribute đã tồn tại'
        ];
    }
    public function attributes(){
        return[
            'name' => 'Tên',
            'email' => 'Email',
            'password' => 'Mật khẩu',
            'date_of_birth' => 'Ngày sinh',
            'image' => 'Ảnh'

        ];
    }
}
