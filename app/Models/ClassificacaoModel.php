<?php

namespace App\Models;

use App\Utils\DBUtils;
use Illuminate\Database\Eloquent\Model;

class ClassificacaoModel extends Model
{
    public const BRONZE = 1;
    public const EM_PROSPECCAO = 6;

    protected $connection = DBUtils::MYSQL->name;
    protected $table = 'classificacao';
    protected $primaryKey = 'idclassificacao';
    protected $fillable = ['descricao'];
}
