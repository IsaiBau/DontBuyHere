<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class addUserRequest extends FormRequest
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
    public function rules()
    {
        return [
            'name' => 'required',
            'user' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:2'
        ];
    }

    public function messages(): array
    {
        return[
            'name.required'=>'El nombre de usuario es obligatorio',

        ];
    }

    public function attributes()
    {
        return[
            'email'=>'correo electronico',
            'password'=>'contraseña'
        ];
    }
}
