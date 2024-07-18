<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RamoModel extends Model
{
    protected $table = 'ramo';
    protected $primaryKey = 'idramo';
    protected $fillable = ['descricao'];
}
