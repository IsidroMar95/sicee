<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CareerRequest extends FormRequest
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

        $careerId = isset($this->career) ? $this->career->id : null;

        return [
            'name'              => 'required|max:100|unique:careers,name,' . $careerId . ',id',
            'agreementNumber'   => 'required|digits_between:7,10|unique:careers,name,' . $careerId . ',id',
            'start_date'        => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required'                         => 'El nombre es obligatorio.',
            'agreementNumber.required'              => 'El N° es obligatorio.',
            'agreementNumber.numeric'               => 'Solo números.',
            'agreementNumber.digits_between'        => 'El N° debe contener entre 8 y 10 dígitos..',
            'start_date.required'                   => 'La fecha de inicio es obligatoria.',
            'name.unique'                           => 'Esta carrera ya se ha registrado.',

        ];
    }
}
