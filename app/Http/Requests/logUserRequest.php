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
<<<<<<< HEAD
            'password' => 'required|min:4'
=======
            'password' => 'required|min:3'
>>>>>>> aa2e83adafc80d09459c64ece9febf1add954acf
        ];
    }

}
