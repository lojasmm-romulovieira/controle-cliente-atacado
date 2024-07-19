<?php

namespace App\Http\Requests;

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'email' => [
                'required',
                'email',
                'max:255'
            ],
            'password' => [
                'required',
                'max:255'
            ],
            'device_name' => [
                'required',
                'max:255'
            ]
        ];
    }

    public function messages(): array
    {
        return [
            'email.required' => 'Necessário fornecer campo email',
            'email.email' => 'Email inválido',
            'email.max' => 'Email é muito longo',
            'password.required' => 'Necessário fornecer campo password',
            'password.max' => 'Password é muito longo',
            'device_name.required' => 'Necessário fornecer campo device name',
            'device_name.max' => 'Nome do dispositivo é muito longo'
        ];
    }
}
