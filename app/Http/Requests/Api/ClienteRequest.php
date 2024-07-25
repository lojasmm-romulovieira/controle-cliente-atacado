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
            'ramos'=> ['nullable', 'array'],
            'ramo.*.idramo' => ['required_with:ramos', 'integer'],
            'idclassificacao' => ['nullable', 'integer'],
            'perfis' => ['nullable', 'array'],
            'perfis.*.idperfil' => ['required_with:perfis', 'integer'],
            'nome' => ['nullable', 'string'],
            'datanascimento' => ['nullable', 'date_format:Y-m-d', 'before:today'],
            'idcidade' => ['nullable', 'integer'],
            'ddd' => ['nullable', 'string'],
            'telefone' => ['nullable', 'string'],
            'telefone2' => ['nullable', 'string'],
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
            'possuiblu' => ['nullable', 'boolean'],
            'ativo' => ['nullable', 'boolean'],
        ];
    }

    public function messages(): array
    {
        return [
            'cnpj.required' => 'Necessário fornecer campo cnpj',
            'razaosocial.required' => 'Necessário fornecer campo razão social',
            'ramos.array' => 'Campo ramos inválido (array)',
            'ramo.*.idramo.required_with' => 'Campo idramo inválido (required_with:ramos)',
            'ramo.*.idramo.integer' => 'Campo idramo inválido (integer)',
            'idclassificacao.integer' => 'Campo idclassificacao inválido (integer)',
            'perfis.array' => 'Campo perfis inválido (array)',
            'perfis.*.idperfil.required_with' => 'Campo idperfil inválido (required_with:perfis)',
            'nome.string' => 'Campo nome inválido (string)',
            'datanascimento.date' => 'Campo data de nascimento inválido (date)',
            'datanascimento.date_format' => 'Campo data de nascimento inválido (date_format:Y-m-d)',
            'datanascimento.before' => 'Campo data de nascimento inválido (before:today)',
            'cnpj.string' => 'Campo cnpj inválido (string)',
            'razaosocial.string' => 'Campo razaosocial inválido (string)',
            'idcidade.integer' => 'Campo idcidade inválido (integer)',
            'ddd.string' => 'Campo ddd inválido (string)',
            'telefone.string' => 'Campo telefone inválido (string)',
            'telefone2.string' => 'Campo telefone2 inválido (string)',
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
            'possuiblu.boolean' => 'Campo possuiblu inválido (boolean)',
            'ativo.boolean' => 'Campo ativo inválido (boolean)',
        ];
    }
}
