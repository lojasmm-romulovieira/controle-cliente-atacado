<?php

namespace App\Models;

use App\Utils\DBUtils;
use Illuminate\Database\Eloquent\Model;

class ClienteModel extends Model
{
    protected $connection = DBUtils::MYSQL->name;
    protected $table = 'cliente';
    protected $primaryKey = 'idcliente';

    protected $fillable = [
        'nome',
        'datanascimento',
        'cnpj',
        'razaosocial',
        'cidade',
        'uf',
        'ddd',
        'telefone',
        'fone1',
        'fone2',
        'celular',
        'email',
        'email2',
        'observacoes',
        'cnpjagrupador',
        'numeroloja',
        'numerovendedor',
        'streetview',
        'limitecredito',
        'enviaremail',
        'possuidividapendente',
        'possuicompra',
        'ativo'
    ];
}
