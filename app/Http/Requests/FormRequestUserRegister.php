<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormRequestUserRegister extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

    // $validator = $this->resolve(
    //                             $data, $rules, $messages, $customAttributes
    //                             );

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
            'name'      => ['required', 'string', 'max:255'],
            'lastname'  => ['required', 'string', 'max:255'],
            'email'     => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password'  => ['required', 'string', 'min:8', 'confirmed'],
            'birthdate' => ['required', 'date']
        ];
    }

    // Devuelve un mensaje por cada atributo erróneo
    public function messages()
    {
        return [
            'name.required'       => 'Recuerda ingresar tu nombre',
            'lastname.required'   => 'Recuerda ingresar tus apellidos',
            'email.required'      => 'Recuerda ingresar tu email',
            'email.unique'        => 'El email ya esta registrado ingresa uno diferente',
            'password.required'   => 'Recuerda ingresar tu contraseña',
            'password.min'        => 'La contraseña debe tener al menos 8 caracteres',
            'birthdate.required'  => 'Recuerda ingresar tu fecha de nacimiento',
            'birthdate.date'      => 'Ingresa bien la fecha de nacimiento ',
        ];
    }

}
