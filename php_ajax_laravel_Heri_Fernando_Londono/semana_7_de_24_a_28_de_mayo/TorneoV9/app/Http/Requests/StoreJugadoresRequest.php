<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreJugadoresRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        /* ______________________________________________________ */
        /* Se debe cambiar como true para que 
        permita el authorize y no suelte un error 
        al intentar identificar StoreJugadoresRequest $request
        dirá que la acción no es autorizada*/
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
            'nombre' => 'required',
            'numero' => 'required',
            'equipo' => 'required',
            'posicion' => 'required',
            'foto' => 'required|image'
        ];
    }

    public function messages(){
        return[
            'nombre.required' => 'El nombre es obligatorio',
            'numero.required' => 'El número es obligatorio',
            'equipo.required' => 'El equipo es obligatorio',
            'posicion.required' => 'La posición es obligatoría',
            'foto.image' => 'La foto debe ser una imagen'
        ];
    }
}
