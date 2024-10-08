<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'cnpj' => ['required', 'string', 'regex:/^\d{14}$/'],
            'razaosocial' => ['required', 'string'],
            'ramos' => ['nullable', 'array'],
            'ramo.*.idramo' => ['required_with:ramos', 'integer'],
            'idclassificacao' => ['nullable', 'integer'],
            'perfis' => ['nullable', 'array'],
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
            'cnpjagrupador' => ['nullable', 'array'],
            'numeroloja' => ['nullable', 'integer'],
            'numerovendedor' => ['nullable', 'integer'],
            'arealoja' => ['nullable', 'integer'],
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
            'cnpj.regex' => 'Campo CNPJ inválido não atende ao formato (00.000.000/0000-00)',
            'cnpj.string' => 'Campo cnpj inválido (string)',
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
            'cnpjagrupador.array' => 'Campo cnpjagrupador inválido (array)',
            'numeroloja.integer' => 'Campo numeroloja inválido (integer)',
            'numerovendedor.integer' => 'Campo numerovendedor inválido (integer)',
            'arealoja.integer' => 'Campo arealoja inválido (integer)',
            'streetview.string' => 'Campo streetview inválido (string)',
            'limitecredito.numeric' => 'Campo limitecredito inválido (numeric)',
            'enviaemail.boolean' => 'Campo enviaemail inválido (boolean)',
            'possuidividapendente.boolean' => 'Campo possuidividapendente inválido (boolean)',
            'possuicompra.boolean' => 'Campo possuicompra inválido (boolean)',
            'possuiblu.boolean' => 'Campo possuiblu inválido (boolean)',
            'ativo.boolean' => 'Campo ativo inválido (boolean)',
        ];
    }

    protected function prepareForValidation()
    {
        $cnpjAgrupador = collect($this->cnpjagrupador)->map(function ($cnpj) {
            return ['cnpjagrupador' => $this->sanitizeNumber($cnpj)];
        });

        $this->merge([
            'cnpj' => $this->sanitizeNumber($this->cnpj),
            'celular' => $this->sanitizeNumber($this->celular),
            'telefone' => $this->sanitizeNumber($this->telefone),
            'telefone2' => $this->sanitizeNumber($this->telefone2),
            'idclassificacao' => collect($this->idclassificacao)->first(),
            'idcidade' => collect($this->idcidade)->first(),
            'possuidividapendente' => $this->sanitizeBoolean($this->possuidividapendente),
            'possuicompra' => $this->sanitizeBoolean($this->possuicompra),
            'possuiblu' => $this->sanitizeBoolean($this->possuiblu),
            'ativo' => $this->sanitizeBoolean($this->ativo),
            'enviaremail' => $this->sanitizeBoolean($this->enviaremail),
            'limitecredito' => $this->sanitizeCreditLimit($this->limitecredito),
            'cnpjagrupador' => $cnpjAgrupador->toArray(),
        ]);
    }

    private function sanitizeNumber($number): string
    {
        return preg_replace('/[^0-9]/', '', $number);
    }

    private function sanitizeCreditLimit($creditLimit)
    {
        $sanitized = str_replace(['.', ','], ['', '.'], $creditLimit);
        return (float)$sanitized;
    }

    private function sanitizeBoolean($value): bool
    {
        return collect($value)->first() === true || collect($value)->first() === 'true';
    }
}
