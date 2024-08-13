<?php

namespace App\Models;

use App\Utils\DBUtils;
use Illuminate\Database\Eloquent\Model;

class ClienteCnpjAgrupador extends Model
{
    protected $connection = DBUtils::MYSQL->name;
    protected $table = 'clientecnpjagrupador';
    protected $primaryKey = 'idclientecnpjagrupador';

    protected $fillable = [
        'idcliente',
        'cnpjagrupador'
    ];

    public function cliente()
    {
        return $this->belongsTo(ClienteModel::class, 'idcliente');
    }
}
