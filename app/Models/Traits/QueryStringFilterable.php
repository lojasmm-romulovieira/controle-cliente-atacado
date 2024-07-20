<?php

namespace App\Models\Traits;

use App\Filters\AbstractFilter;
use Illuminate\Database\Eloquent\Builder;

trait QueryStringFilterable
{
    public function scopeFilter(Builder $query, AbstractFilter $filter)
    {
        $filter->apply($query);
    }
}
