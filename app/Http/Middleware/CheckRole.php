<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $levels = array_slice(func_get_args(), 2);

    foreach ($levels as $level) { 
        $user = \Auth::user()->level;
        if( $user == $level){
            return $next($request);
        }
    }

    return redirect('/');
    }
}
