<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HookAuth
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
        if (!($request->header('x-api-key') == env('NBA_UDN_API_KEY'))) {
            return abort(403);
        };
        return $next($request);
    }
}
