<?php

namespace App\Models;

use App\Models\Traits\QueryStringFilterable;
use App\Utils\DBUtils;
use Illuminate\Database\Eloquent\Model;

class ClienteModel extends Model
{
    use QueryStringFilterable;

    protected $connection = DBUtils::MYSQL->name;
    protected $table = 'cliente';
    protected $primaryKey = 'idcliente';

    protected $fillable = [
        'nome',
        'datanascimento',
        'cnpj',
        'razaosocial',
        'idclassificacao',
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

    public function ramos()
    {
        return $this->belongsToMany(RamoModel::class, 'ramocliente', 'idcliente', 'idramo')
            ->withPivot('idramocliente')
            ->withTimestamps();
    }

    public function classificacao()
    {
        return $this->belongsTo(ClassificacaoModel::class, 'idclassificacao', 'idclassificacao');
    }
}
