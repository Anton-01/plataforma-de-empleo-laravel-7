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
            'categoria' => 'required|int:not_in:0|exists:categorias,id',
            'experiencia' => 'required|int:not_in:0|exists:experiencias,id',
            'ubicacion' => 'required|int:not_in:0|exists:ubicacions,id',
            'salario' => 'required|int:not_in:0|exists:salarios,id',
            'descripcion' => 'required|min:50',
            'imagen' => 'required',
            'skills' => 'required'

        ];
    }
}
