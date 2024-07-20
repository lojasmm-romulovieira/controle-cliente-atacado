<?php

namespace App\Models;

use App\Utils\DBUtils;
use Illuminate\Database\Eloquent\Model;

class RamoModel extends Model
{
    protected $connection = DBUtils::MYSQL->name;
    protected $table = 'ramo';
    protected $primaryKey = 'idramo';
    protected $fillable = ['descricao'];

    public function clientes()
    {
        return $this->belongsToMany(ClienteModel::class, 'ramocliente', 'idramo', 'idcliente')
            ->withPivot('idramocliente')
            ->withTimestamps();
    }
}
