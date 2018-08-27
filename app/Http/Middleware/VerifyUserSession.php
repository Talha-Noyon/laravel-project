<?php

namespace App\Http\Middleware;

use Closure;

class VerifyUserSession
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
        if(!$request->session()->has('user'))
        {
            
            return redirect()->route('login')->with('errMsg','please login to enter dashboard');
           
        }
        return $next($request);
    }
}
