<?php

namespace App\Models\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class DefaultOrderByScope implements Scope
{
    public function __construct(
        protected string $field = 'id',
        protected string $sort = 'asc'
    )
    {
    }

    public function apply(Builder $builder, Model $model)
    {
        $builder->orderBy($this->field, $this->sort);
    }
}
