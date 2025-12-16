<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LoginMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        if (request()->routeIs("login") && auth()->check()) {
            return redirect()->route("orders");
        } else {
            return $next($request);
        }
    }
}
