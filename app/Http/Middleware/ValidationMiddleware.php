<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ValidationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if($request->access_token == date("jmY")){
            echo "Anda dapat melanjutkan";
        }
        else{
            echo "Periksa access token dahulu";
        }
        return $next($request);
    }
}
