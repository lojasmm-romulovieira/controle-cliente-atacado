<?php

namespace App\Models;

use App\Models\Scopes\DefaultOrderByScope;
use App\Utils\DBUtils;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class EstadoModel extends Model
{
    protected $connection = DBUtils::MYSQL->name;
    protected $table = 'estado';
    protected $primaryKey = 'idestado';

    protected $fillable = [
        'nome',
        'uf'
    ];

    protected static function booted()
    {
        static::addGlobalScope(new DefaultOrderByScope('nome'));
    }

    public function Cidade(): HasMany
    {
        return $this->hasMany(CidadeModel::class, 'idestado');
    }
}
