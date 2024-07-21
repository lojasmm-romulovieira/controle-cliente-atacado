<?php

namespace App\Models;

use App\Utils\DBUtils;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cidade extends Model
{
    protected $connection = DBUtils::MYSQL->name;
    protected $table = 'cidade';
    protected $primaryKey = 'idcidade';

    protected $fillable = [
        'idestado',
        'nome'
    ];

    public function Estado(): BelongsTo
    {
        return $this->belongsTo(Estado::class, 'idestado');
    }
}
