<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required|min:6|max:255',
            'address' =>'required',
            'bill'=>'required',
            'phone' =>'required',
            'total_bill'=>'required',
            'create_at'=>'required|date_format:Y/d/m',
        ];
    }

    public function messages()
    {
        return [
        'name.required' => 'Tên khách hàng bắt buộc phải nhập',
        'name.min' => 'Tên khách hàng ít nhất 6 kí tự',
        'name.max'=>'Tên khách hàng tối đa chỉ được 255 kí tự',
        'address.required'=>'Địa chỉ bắt buộc phải nhập',
        'bill.required'=>'Hoá đơn bắt buộc nhập',
        'phone.required'=>'Số điện thoại bắt buộc nhập',
        'total_bill.required'=>'Tổng hoá đơn bắt buộc nhập',
        'create_at.required' =>'Thời gian bắt buộc nhập',
        'create_at.date_format' => 'Thời gian phải nhập theo trình tự Năm/Ngày/Tháng'
        ];

    }
}
