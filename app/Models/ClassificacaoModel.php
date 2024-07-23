<?php

namespace App\Models;

use App\Utils\DBUtils;
use Illuminate\Database\Eloquent\Model;

class ClassificacaoModel extends Model
{
    public const A = 1;
    public const B = 2;
    public const C = 3;
    public const EM_PROSPECCAO = 4;

    protected $connection = DBUtils::MYSQL->name;
    protected $table = 'classificacao';
    protected $primaryKey = 'idclassificacao';
    protected $fillable = ['descricao'];
}
