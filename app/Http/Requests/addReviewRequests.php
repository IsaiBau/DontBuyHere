<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class addReviewRequests extends FormRequest
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
            'localNameAdd' => 'required',
            'address' => 'required',
            'localTypeAdd' => 'required',
            'calificacion' => 'required',
            'reviewAdd' => 'required',
            'foto' => 'required',
        ];
    }

    
    public function messages():array{
        return[
            'email.required'=> 'El correo electrónico es obligatorio',
        ];
    }

    public function attributes():array{
        return[
            'email'=> 'correo electronico',
            'password'=> 'contraseña'
        ];
    }
}
