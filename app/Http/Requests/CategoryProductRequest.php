<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryProductRequest extends FormRequest
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
            'category_product_name' => 'required|min:2',
            'category_id' => 'required',
            'category_local_id' => 'required'
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
            'category_product_name' => 'Tên danh mục hãng',
            'category_local_id' => 'Danh mục hãng',
            'category_id' => 'Danh mục',
        ];
    }
}
