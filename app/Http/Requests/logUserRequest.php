<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class logUserRequest extends FormRequest
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
     * @return array<string, mixed>
     */
   
    public function rules(): array
    {
        return [
            'email' => 'required|email',
            'password' => 'required|min:3'
        ];
    }
    public function messages():array
    {
        return [
            'email.required'=>'El correo electrónico de usuario es obligatorio.',
            'password.required'=>'La contraseña de usuario es obligatoria.',
            'password_confirmation.required'=>'La confirmación de contraseña de usuario es obligatoria.',
            //'email.required'=>'El correo electrónico es obligatorio'
        ];
    }

}
