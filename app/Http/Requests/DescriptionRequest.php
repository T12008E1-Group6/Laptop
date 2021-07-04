<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DescriptionRequest extends FormRequest
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
            //
            'desc_serieslaptop' => 'required',
            'desc_warranty' => 'required',
            'desc_partnumber' => 'required',
            'desc_CPUgeneration' => 'required',
            'desc_CPU' => 'required',
            'desc_card' => 'required',
            'desc_ram' => 'required','desc_screen' => 'required','desc_storage' => 'required',
            'desc_maxstorage' => 'required','desc_supported' => 'required','desc_output' => 'required',
            'desc_connector' => 'required','desc_wireless' => 'required','desc_keyboard' => 'required',
            'desc_window' => 'required','desc_size' => 'required','desc_battery' => 'required',
            'desc_weight' => 'required','desc_color' => 'required','desc_security' => 'required',
            'desc_led' => 'bail |required','desc_accessories' => 'required', 
            'product_id' =>'required|unique:tbl_description,product_id'
        ];
    }

    public function messages(){
        return [
            'desc_serieslaptop.required' => 'Vui lòng không để trống',
            'desc_warranty.required' => 'Vui lòng không để trống',
            'desc_partnumber.required' => 'Vui lòng không để trống',
            'desc_CPUgeneration.required' => 'Vui lòng không để trống',
            'desc_CPU.required' => 'Vui lòng không để trống',
            'desc_card.required'=> 'Vui lòng không để trống',
            'desc_ram.required'=> 'Vui lòng không để trống','desc_screen.required'=> 'Vui lòng không để trống',
            'desc_storage.required'=> 'Vui lòng không để trống','desc_maxstorage.required'=> 'Vui lòng không để trống',
            'desc_supported.required'=> 'Vui lòng không để trống','desc_output.required'=> 'Vui lòng không để trống',
            'desc_connector.required'=> 'Vui lòng không để trống','desc_wireless.required'=> 'Vui lòng không để trống',
            'desc_keyboard.required'=> 'Vui lòng không để trống','desc_window.required'=> 'Vui lòng không để trống',
            'desc_size.required'=> 'Vui lòng không để trống','desc_battery.required'=> 'Vui lòng không để trống',
            'desc_weight.required'=> 'Vui lòng không để trống','desc_color.required'=> 'Vui lòng không để trống',
            'desc_security.required'=> 'Vui lòng không để trống','desc_led.required'=> 'Vui lòng không để trống',
            'desc_accessories.required'=> 'Vui lòng không để trống',
            'product_id.unique' => 'Dữ liệu đã tồn tại ! Vui lòng thay đổi'
        
        ];
    }

}