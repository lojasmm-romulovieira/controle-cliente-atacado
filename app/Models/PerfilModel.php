<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PerfilModel extends Model
{
    protected $table = 'perfil';
    protected $primaryKey = 'idperfil';
    protected $fillable = ['descricao'];
}
