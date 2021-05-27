<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEquiposRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // Si está en false, cuando intente hacer el envio
        // no me permitirá enviar los datos para 
        // los usuarios no autorisados
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
            'dt' => 'required',
            'municipio' => 'required',
            'escudo' => 'required|image'
            /* de ésta manera podemos agregar reglas de
            validación */
            /* la última validación es un buen ejemplo de dos
            validaciones para un mismo campo */
        ];
    }
    public function messages(){
        return[
            'nombre.required' => 'El nombre es obligatirio',
            'dt.required' => 'El D.T. es obligatirio',
            'municipio.required' => 'El municipio es obligatirio',
            'escudo.required' => 'El escudo es obligatirio',
            'escudo.image' => 'El escudo debe ser una imagen'
        ];
    }
}
