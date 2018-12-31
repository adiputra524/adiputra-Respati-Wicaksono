<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class Pembantas
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
        if(auth::user()->admin==0)
            return redirect('/home');
        return $next($request);
    }
}
