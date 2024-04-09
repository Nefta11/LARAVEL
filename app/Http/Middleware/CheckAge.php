<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;



class CheckAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $maxAge)
    {
        // %age=17;

        if($request ->age > 15 && $request ->age < $maxAge){

            return redirect('/nombre/neftali');
        }
        return $next($request);

    }
}
