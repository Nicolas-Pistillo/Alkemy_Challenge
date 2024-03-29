<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAppRequest extends FormRequest
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
            'price' => 'required|integer',
            'app-img' => 'required|image',
            'description' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'price.required' => '¿Que precio tendra tu aplicacion?',
            'price.integer' => 'El precio debe tener un valor numerico',
            'app-img.required' => 'Tu aplicacion necesita un logo',
            'app-img.image' => 'No trates de subir un archivo que no sea una imagen, porfavor',
            'description.required' => 'El campo descripcion no puede estar vacio'
        ];
    }
}
