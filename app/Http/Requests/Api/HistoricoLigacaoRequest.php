<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class HistoricoLigacaoRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'idcliente' => 'required|integer',
            'fezpedido' => 'required|boolean',
            'atendeuligacao' => 'required|boolean',
            'observacao' => 'nullable|string|max:100',
        ];
    }

    public function messages(): array
    {
        return [
            'idcliente.required' => 'O campo idcliente é obrigatório.',
            'idcliente.integer' => 'O campo idcliente deve ser um número inteiro.',
            'fezpedido.required' => 'O campo fezpedido é obrigatório.',
            'fezpedido.boolean' => 'O campo fezpedido deve ser um booleano.',
            'atendeuligacao.required' => 'O campo atendeuligacao é obrigatório.',
            'atendeuligacao.boolean' => 'O campo atendeuligacao deve ser um booleano.',
            'observacao.string' => 'O campo observacao deve ser uma string.',
            'observacao.max' => 'O campo observacao deve ter no máximo 100 caracteres.',
        ];
    }

    protected function prepareForValidation() {
        $this->merge([
            'fezpedido' => $this->fezpedido === 'true',
            'atendeuligacao' => $this->atendeuligacao === 'true'
        ]);
    }
}
