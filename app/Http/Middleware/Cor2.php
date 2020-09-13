<?php

namespace App\Http\Middleware;

use Closure;

class Cor2
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
        $response = $next($request);
        $response->headers->set('Access-Control-Allow-Origin' , '*');
        $response->headers->set('Access-Control-Allow-Methods', 'POST, GET, OPTIONS, PUT, DELETE');
        $response->headers->set('Access-Control-Allow-Headers', 'Content-Type, Accept, Authorization, X-Requested-With, Application');
        $response->headers->set("Access-Control-Max-Age", "3600");
        $response->headers->set("Access-Control-Allow-Credentials", "true");
        $response->headers->set("Access-Control-Expose-Headers", "Authorization");
        $response->headers->set("Access-Control-Expose-Headers", "responseType");
        $response->headers->set("Access-Control-Expose-Headers", "observe");
        return $response;
    }
}
