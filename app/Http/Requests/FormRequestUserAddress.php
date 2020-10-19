<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormRequestUserAddress extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    // Determina si el usuario está autorizado para enviar el request
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
            'address'       => 'required',
            'number'        => 'required|integer',
            'colony'        => 'required',
            'municipality'  => 'required',
            'postal_code'   => 'required|integer|zise:5',
        ];
    }

    // Devuelve un mensaje por cada atributo erróneo
    public function messages()
    {
        return [
            'address.required'       => 'Recuerda ingresar la direccion',
            'number.required'        => 'Recuerda ingresar el numero de tu casa',
            'number.integer'         => 'El numero de tu casa debe ser un numero entero',
            'colony.required'        => 'Recuerda ingresar la colonia',
            'municipality.required'  => 'Recuerda ingresar el municipio',
            'postal_code.required'   => 'Recuerda ingresar el codigo postal ',
            'postal_code.integer'    => 'Ingresar el codigo postal a 5 digitos numericos',
            'postal_code.zise'       => 'Ingresar el codigo postal a 5 digitos',
        ];
    }
}
