<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Symfony\Component\HttpFoundation\Response;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        return $next($request);
    }

    protected function redirectTo(Request $request): ?string
    {
        if (!$request->expectsJson()) {
            if ($request->is('admin/*')) {
                return route('loginadmin'); // Rute untuk login admin
            } else {
                return route('login'); // Jika Anda juga menggunakan rute login umum
            }
        }
    
        return null;
    }
}
