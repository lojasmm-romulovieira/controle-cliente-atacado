<?php

namespace App\Http\Requests;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class RecadoRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'idcliente' => 'required|exists:cliente,idcliente',
            'recado' => 'required|string',
            'datahoraretorno' => 'required|date_format:Y-m-d H:i:s'
        ];
    }

    public function messages(): array
    {
        return [
            'idcliente.required' => 'O campo idcliente é obrigatório.',
            'idcliente.exists' => 'O idcliente informado não existe.',
            'recado.required' => 'O campo recado é obrigatório.',
            'recado.string' => 'O campo recado deve ser uma string.',
            'datahoraretorno.required' => 'O campo datahoraretorno é obrigatório.',
            'datahoraretorno.date_format' => 'O campo datahoraretorno deve ser uma data válida no formato Y-m-d H:i:s.'
        ];
    }

    public function prepareForValidation()
    {
        return $this->merge([
            'datahoraretorno' => Carbon::parse($this->datahoraretorno)->format('Y-m-d H:i:s')
        ]);
    }
}
