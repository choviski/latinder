<?php

namespace App\Http\Middleware;

use Closure;

class CheckConnection
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public function handle($request, Closure $next)
    {
        testeConexao();
        return $next($request);
    }
}
