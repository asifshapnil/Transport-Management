<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
Use Auth;

class test
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

    
        return $next($request);
    }
}
