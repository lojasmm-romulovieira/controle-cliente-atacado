<?php

namespace App\Http\Middleware;

class CustomRedirectIfAuthenticated
{
    public function handle($request, $next)
    {
        if (auth()->check()) {
            return redirect()->route('web.cliente.index');
        }

        return $next($request);
    }

}
