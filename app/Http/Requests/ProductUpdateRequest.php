<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductUpdateRequest extends FormRequest
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
            'product_name' => 'required|min:6',
            'product_image_update' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'product_price' => 'required|min:4',
            'category_product' => 'required',
            'description' => '',
            'insurance' => '',
            'series_laptop' => '',
            'status' => '',
            'cpu' => '',
            'ram' => '',
            'rom' => '',
            'card' => '',
            'screen' => '',
            'keyboard' => '',
            'audio' => '',
            'read_memory_card' => '',
            'lan' => '',
            'wireless_connectivity' => '',
            'webcam' => '',
            'the_web_of_communication' => '',
            'operating_system' => '',
            'battery' => '',
            'weight' => '',
            'size' => '',
            'color' => '',
            'security' => '',
        ];
    }
    public function messages(){
        return [

        ];
    }
    public function attributes(){
        return[

        ];
    }
}
