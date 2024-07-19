<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'cnpj' => ['required', 'string'],
            'razaosocial' => ['required', 'string'],

            'nome' => ['nullable', 'string'],
            'datanascimento' => ['nullable', 'date_format:Y-m-d', 'before:today'],
            'cidade' => ['nullable', 'string'],
            'uf' => ['nullable', 'string', 'uppercase'],
            'ddd' => ['nullable', 'string'],
            'telefone' => ['nullable', 'string'],
            'fone1' => ['nullable', 'string'],
            'fone2' => ['nullable', 'string'],
            'celular' => ['nullable', 'string', 'max:11'],
            'email' => ['nullable', 'email'],
            'email2' => ['nullable', 'email'],
            'observacoes' => ['nullable', 'string'],
            'cnpjagrupador' => ['nullable', 'string'],
            'numeroloja' => ['nullable', 'integer'],
            'numerovendedor' => ['nullable', 'integer'],
            'streetview' => ['nullable', 'string'],
            'limitecredito' => ['nullable', 'numeric'],
            'enviaremail' => ['nullable', 'boolean'],
            'possuidividapendente' => ['nullable', 'boolean'],
            'possuicompra' => ['nullable', 'boolean'],
            'ativo' => ['nullable', 'boolean'],
        ];
    }

    public function messages(): array
    {
        return [
            'cnpj.required' => 'Necessário fornecer campo cnpj',
            'razaosocial.required' => 'Necessário fornecer campo razão social',

            'nome.string' => 'Campo nome inválido (string)',
            'datanascimento.date' => 'Campo data de nascimento inválido (date)',
            'datanascimento.date_format' => 'Campo data de nascimento inválido (date_format:Y-m-d)',
            'datanascimento.before' => 'Campo data de nascimento inválido (before:today)',
            'cnpj.string' => 'Campo cnpj inválido (string)',
            'razaosocial.string' => 'Campo razaosocial inválido (string)',
            'cidade.string' => 'Campo cidade inválido (string)',
            'uf.string' => 'Campo uf inválido (string)',
            'uf.uppercase' => 'Campo uf inválido (uppercase)',
            'ddd.string' => 'Campo ddd inválido (string)',
            'telefone.string' => 'Campo telefone inválido (string)',
            'fone1.string' => 'Campo fone1 inválido (string)',
            'fone2.string' => 'Campo fone2 inválido (string)',
            'celular.string' => 'Campo celular inválido (string)',
            'celular.max' => 'Campo celular inválido (max:11)',
            'email.email' => 'Campo email inválido (email)',
            'email2.email' => 'Campo email2 inválido (email)',
            'observacoes.string' => 'Campo observacoes inválido (string)',
            'cnpjagrupador.string' => 'Campo cnpjagrupador inválido (string)',
            'numeroloja.integer' => 'Campo numeroloja inválido (integer)',
            'numerovendedor.integer' => 'Campo numerovendedor inválido (integer)',
            'streetview.string' => 'Campo streetview inválido (string)',
            'limitecredito.numeric' => 'Campo limitecredito inválido (numeric)',
            'enviaemail.boolean' => 'Campo enviaemail inválido (boolean)',
            'possuidividapendente.boolean' => 'Campo possuidividapendente inválido (boolean)',
            'possuicompra.boolean' => 'Campo possuicompra inválido (boolean)',
            'ativo.boolean' => 'Campo ativo inválido (boolean)',
        ];
    }
}
