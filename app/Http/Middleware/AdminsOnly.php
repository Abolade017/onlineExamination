<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AdminsOnly
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->guest()) {
            abort(403);
        }
        if (auth()->user()->username!=='admin@01' ) {
            abort(Response::HTTP_FORBIDDEN);
        }
        return $next($request);
    }
}
