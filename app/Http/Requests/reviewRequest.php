<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class reviewRequest extends FormRequest
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
            'localTypeAdd' => 'required',
            'email' => 'required',
            'password' => 'required',
        ];
    }

        public function messages():array
        {
            return [
                'localNameAdd.required'=>'Ento es obligatorio.',
                'localTypeAdd.required'=>'El es obligatorio.',
                '.required'=>'El tipo de Establecimiento es obligatorio.',
                '.required'=>'El es obligatorio.',
                '.required'=>'El es obligatorio.',
                '.required'=>'El es obligatorio.',
                '.required'=>'El es obligatorio.',
                '.required'=>'El es obligatorio.',
            ];
        }
}
