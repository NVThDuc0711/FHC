<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class EditRequest extends FormRequest
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
        return[

                'name' => 'required|min:6|max:255',
                'address' =>'required',
                // 'email' =>[
                //     'required','ends_with:@gmail.com',
                //     Rule::unique('admin')->ignore($this->id)
                // ],
        ];
    }
}
