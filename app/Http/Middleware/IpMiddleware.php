<?php

namespace App\Http\Middleware;

use Closure;

class IpMiddleware
{
    /**
     * Handle an incoming request.
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
//        if ($request->ip() == '169.158.128.79' || $request->ip() == '169.158.128.76' || $request->ip() == '169.158.128.250') {
            return $next($request);
//        }
//        return redirect('home');
    }
}
