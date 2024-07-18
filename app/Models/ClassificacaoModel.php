<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClassificacaoModel extends Model
{
    protected $table = 'classificacao';
    protected $primaryKey = 'idclassificacao';
    protected $fillable = ['descricao'];
}
