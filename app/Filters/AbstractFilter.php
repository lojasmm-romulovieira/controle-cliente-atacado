<?php

namespace App\Filters;

use App\Helpers\RequestHelper;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

abstract class AbstractFilter
{
    protected $builder;

    public function apply(Builder $b)
    {
        $this->builder = $b;
        $qs = RequestHelper::getQueryStringAsArray();

        foreach ($qs as $queryStringKey => $value) {
            $methodName = Str::camel($queryStringKey);

            if (method_exists($this, $methodName)) {
                call_user_func_array([$this, $methodName], [$value]);
            }
        }
    }

    public function order(string $param)
    {
        $sort = request()->get('sort', 'asc');
        $sortSanitized = mb_strtolower($sort) === 'asc' ? 'asc' : 'desc';

        $this->builder->orderBy($param, $sortSanitized);
    }
}
