<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderBannerRequest extends FormRequest
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
            'image_banner' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ];
    }
    public function messages() {
        return [
            'required' => ':attribute không được để trống',
            'image' => 'File này phải là ảnh',
            'mimes:jpg,png,jpeg,gif,svg' => 'File này phải là ảnh'
        ];
    }
    public function attributes(){
        return [
            'image_banner' => 'Ảnh banner'
        ];
    }
}
