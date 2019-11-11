<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubjectRequest extends FormRequest
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
        $subjectId = isset($this->subject) ? $this->subject->id : null;

        $rules  = [
            'name'  => 'required|max:60|unique:subjects,name,' . $subjectId . ',id',
        ];


        if ($this->getMethod() == 'PUT') {
            $rules += ['career_id'          => 'required'];
            $rules += ['grade_level_id'     => 'required'];
            $rules += ['school_period_id'   => 'required'];
            $rules += ['teacher_id'         => 'required'];
        }

        return $rules;


    }


    public function messages()
    {
        return [
            'name.required'                 => 'El nombre es obligatorio.',
            'name.unique'                   => 'Ésta materia ya se ha registrado.',
            'career_id.required'            => 'La carrera es obligatoria.',
            'grade_level_id.required'       => 'El cuatrimestre es obligatorio.',
            'school_period_id.required'     => 'El periodo es obligatorio.',
            'teacher_id.required'           => 'El Profesor es obligatorio.',
        ];
    }
}
