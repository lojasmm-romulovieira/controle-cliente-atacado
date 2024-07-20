<?php

namespace App\Helpers;

use Illuminate\Support\Arr;

final class RequestHelper
{
    public static final function getQueryStringAsArray(): array
    {
        $filtered = Arr::where(request()->all(), function ($v, $k) {
            return (is_array($v) ? count($v) > 0 : true);
        });

        return (array)array_filter($filtered);
    }
}
