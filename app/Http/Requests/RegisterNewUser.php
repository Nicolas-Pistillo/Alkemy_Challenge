<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterNewUser extends FormRequest
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
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required',
            'alias' => 'required|unique:users',
            'password' => 'required|min:10|confirmed',
            'type_user' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Necesitamos tu nombre para continuar',
            'surname.required' => 'Tu apellido es necesario',
            'alias.required' => 'Necesitas un alias cool!',
            'alias.unique' => 'Ese alias ya esta en uso!',
            'email.required' => 'Debes especificar tu correo electronico',
            'password.required' => 'La contraseña no puede estar vacia',
            'password.min' => 'La contraseña debe tener al menos 10 caracteres',
            'password.confirmed' => 'Las contraseñas no coinciden',
            'type_user.required' => 'Indica que rol cumples en la fiesta :D (cliente o dev)'
        ];
    }
}
