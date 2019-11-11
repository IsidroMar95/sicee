<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class School_periodRequest extends FormRequest
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
            'description'   => 'required|in:ENERO-ABRIL,MAYO-SEPTIEMBRE,AGOSTO-DICIEMBRE',
            'year'          => 'required|numeric|min:5'
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            'description.required'      => 'El periodo es obligatorio.',
            'year.required'             => 'El año es obligatorio.',
            'year.max'                  => 'No más de 4 caracateres.',
            'year.min'                  => 'No menos de 4 caracateres.',
            'year.numeric'              => 'Año invalido.',
        ];
    }
}
