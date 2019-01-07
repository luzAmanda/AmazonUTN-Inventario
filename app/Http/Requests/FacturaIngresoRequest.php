<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FacturaIngresoRequest extends FormRequest
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
            'prv_id' =>'required',
            'doc_codigo' =>'required|max:8',
            'doc_fecha' =>'required',
            'pro_id' =>'required',
            'cantidad' =>'required',
            'costo' => 'required',
            'precio'=>'required',

        ];
    }
}
