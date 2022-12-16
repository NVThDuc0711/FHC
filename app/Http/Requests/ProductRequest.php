<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' =>'required|min:6|max:255',
            'family' => 'required',
            'price' =>'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'Tên bắt buộc nhập',
            'name.min' => 'Tên có ít nhất 6 kí tự',
            'name.max' =>'Tên tối đa chỉ 255 kí tự',
            'family.required' =>'Họ bắt buộc nhập',
            'price.required'=>'Giá bắt buộc nhập'
        ];
    }
}
