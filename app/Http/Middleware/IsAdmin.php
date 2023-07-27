<?php

namespace App\Http\Middleware;
use Closure;


class IsAdmin
{
    public function handle($request, Closure $next)
    {
        return $next($request);
    }
}