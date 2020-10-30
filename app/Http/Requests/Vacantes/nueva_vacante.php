<?php

namespace App\Http\Requests\Vacantes;

use Illuminate\Foundation\Http\FormRequest;

class nueva_vacante extends FormRequest
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
            'titulo' => 'required|min:8',
            'plazas' => 'required',

            'rfc' => 'nullable',
            'experiencia' => 'required|int:not_in:0|exists:experiencias,id',
            'salario' => 'required|int:not_in:0|exists:salarios,id',

            'escolaridad' => 'required',
            'horario' => 'required',
            'rango' => 'required',
            'sexo' => 'required',

            'licencia' => 'required',
            'cartilla' => 'required',

            'description' => 'required',
            'actividades' => 'required',
            'habilidades' => 'required'
        ];
    }
}
