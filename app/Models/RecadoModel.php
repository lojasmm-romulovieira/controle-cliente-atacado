<?php

namespace App\Models;

use App\Utils\DBUtils;
use Illuminate\Database\Eloquent\Model;

class RecadoModel extends Model
{
    protected $connection = DBUtils::MYSQL->name;
    protected $table = 'recadocliente';
    protected $primaryKey = 'idrecadocliente';

    protected $fillable = [
        'idcliente',
        'recado',
        'datahoraretorno'
    ];

    public function cliente()
    {
        return $this->belongsTo(ClienteModel::class, 'idcliente', 'idcliente');
    }
}
