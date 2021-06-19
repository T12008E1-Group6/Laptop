<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductIMGRequest extends FormRequest
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
            'product_name' => 'required',
            'product_desc' => 'required',
            'product_desc' => 'required',
            'product_content' => 'required',
            'product_price' => 'required|numeric',
            'product_amount' => 'required|numeric'
        ];
    }

    public function messages(){
        return [
            'product_name.required' => 'Vui lòng không để trống',
            'product_desc.required' => 'Vui lòng không để trống',
            'product_content.required' => 'Vui lòng không để trống',
            'product_desc.required' => 'Vui lòng không để trống',
            'product_price.required'=> 'Vui lòng không để trống',
            'product_amount.required'=> 'Vui lòng không để trống',
            'product_price.numeric' => 'Giá phải là số',
            'product_amount.numeric' => 'Số lượng phải là số'
        ];
    }
}
