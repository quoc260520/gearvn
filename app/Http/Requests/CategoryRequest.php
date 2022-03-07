<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'category_name' => 'required|min:2',
        ];
    }
    public function messages() {
        return [
            'required' => ':attribute không được để trống',
            'min' => ':attribute phải lớn hơn :min ký tự',
        ];
    }
    public function attributes(){
        return[
            'category_name' => 'Tên danh mục',
            'category_local_name' => 'Tên danh mục hãng'
        ];
    }
}
