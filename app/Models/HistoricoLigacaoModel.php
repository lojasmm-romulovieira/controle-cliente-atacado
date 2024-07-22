<?php

namespace App\Models;

use App\Utils\DBUtils;
use Illuminate\Database\Eloquent\Model;

class HistoricoLigacaoModel extends Model
{
    protected $connection = DBUtils::MYSQL->name;
    protected $table = 'historicoligacao';
    protected $primaryKey = 'idhistoricoligacao';

    protected $fillable = [
        'idcliente',
        'fezligacao',
        'fezpedido',
        'atendeuligacao',
        'observacao'
    ];

    public function cliente()
    {
        return $this->belongsTo(ClienteModel::class, 'idcliente', 'idcliente');
    }
}
