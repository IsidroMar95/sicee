<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfessionRequest extends FormRequest
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

        $professionId = isset($this->profession) ? $this->profession->id : null;

        return [
            'name' => 'required|max:100|unique:professions,name,' . $professionId . ',id',
        ];
    }


    /**
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'El nombre es obligatorio.',
            'name.max'      => 'No más de 100 caracateres.',
            'name.unique'   => 'Este nombre ya se ha registrado.',
        ];
    }
}
