<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CodeCreateRequest extends FormRequest
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
            "post_name" => 'required',
            "post_code" =>'required',
            "post_sale" =>'required',
        ];
    }
    public function messages()
    {
        return [
            "required"=>'khong duoc de trong',
        ];
    }
}
