<?php

namespace App\Models;

use App\Utils\DBUtils;
use Illuminate\Database\Eloquent\Model;

class PerfilModel extends Model
{
    protected $connection = DBUtils::MYSQL->name;
    protected $table = 'perfil';
    protected $primaryKey = 'idperfil';
    protected $fillable = ['descricao'];
}
