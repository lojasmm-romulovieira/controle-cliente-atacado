<?php

namespace App\Models;

use App\Utils\DBUtils;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Estado extends Model
{
    protected $connection = DBUtils::MYSQL->name;
    protected $table = 'estado';
    protected $primaryKey = 'idestado';

    protected $fillable = [
        'nome',
        'uf'
    ];

    public function Cidade(): HasMany
    {
        return $this->hasMany(Cidade::class, 'idestado');
    }
}
