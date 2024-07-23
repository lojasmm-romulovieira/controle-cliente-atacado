<?php

namespace App\Models;

use App\Utils\DBUtils;
use Illuminate\Database\Eloquent\Model;

class UsuarioClienteModel extends Model
{
    protected $connection = DBUtils::MYSQL->name;
    protected $table = 'usuariocliente';
    protected $primaryKey = 'idusuariocliente';

    protected $fillable = [
        'idcliente',
        'idusuario',
    ];
}
