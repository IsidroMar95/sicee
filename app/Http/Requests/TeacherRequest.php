<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeacherRequest extends FormRequest
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
        $userId = isset($this->teacher) ? $this->teacher->user_id : null;

        $rules = [
            'name'              => 'required|max:60',
            'middleName'        => 'max:60',
            'firstLastName'     => 'required|required|max:60',
            'secondLastName'    => 'required|max:60',
            'phone'             => 'required|numeric|digits_between:10,13',
            'email'             => 'required|email|max:255|unique:users,email,' . $userId . ',id',
            'address'           => 'required|max:160',
            'zipCode'           => 'required|max:8',
            'birthday'          => 'required',
            'username'          => 'required|max:12|unique:users,username,' . $userId . ',id',
            'curp'              => 'required|unique:users,curp,' . $userId . ',id',
            'profession_id'     => 'required',
            'start_date'        => 'required'
        ];


        if ($this->getMethod() == 'POST') {
            $rules += ['password' => 'required|min:6'];
        }

        return $rules;
    }


    /**
     * @return array
     */
    public function messages()
    {
        return [
            'name.required'             => 'El nombre es obligatorio.',
            'name.max'                  => 'No más de 60 caracateres.',
            'firstLastName.required'    => 'El Apellido Paterno es obligatorio.',
            'firstLastName.max'         => 'No más de 60 caracateres.',
            'secondLastName.required'   => 'El Apellido Materno es obligatorio.',
            'secondLastName.max'        => 'No más de 60 caracateres.',
            'birthday.required'         => 'La fecha de nacimiento es obligatoria.',
            'curp.required'             => 'El CURP es obligatorio.',
            'address.required'          => 'La dirección es obligatoria.',
            'address.max'               => 'No más de 160 caracateres.',
            'zipCode.required'          => 'El CP es obligatorio.',
            'zipCode.max'               => 'No más de 8 caracateres.',
            'phone.required'            => 'El teléfono es obligatorio.',
            'phone.numeric'             => 'Teléfono invalido.',
            'digits_between'            => 'Debe tener :min - :max Digitos.',
            'size'                      => 'Debe tener :size digitos',
            'email.required'            => 'El email es obligatorio.',
            'email.unique'              => 'Este email ya se ha registrado.',
            'start_date.required'       => 'La fecha de inicio es obligatoria.',
            'profession_id.required'    => 'La profesión es obligatoria.',
            'username.required'         => 'La cédula es obligatoria.',
            'password.required'         => 'La contraseña es obligatoria.',
            'curp.unique'               => 'Este CURP ya se ha registrado.',
            'username.unique'           => 'Este nombre de usuario ya se ha registrado.'
        ];
    }
}
