<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixedvalidation
     */
    public function handle(Request $request, Closure $next)
    {
      
        if($request->path()=='login' && $request->session()->has('email')){
            return redirect('index');
        }
        return $next($request);
    }
}
