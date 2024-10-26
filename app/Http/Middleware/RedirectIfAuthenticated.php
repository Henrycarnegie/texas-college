<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            $user = Auth::user();

            // Redirect berdasarkan role
            if ($user->hasRole('admin')) {
                return redirect('/admin');
            } elseif ($user->hasRole('guru')) {
                return redirect('/guru');
            }elseif ($user->hasRole('siswa')) {
                return redirect('/siswa');
            }
        }

        return $next($request);
    }
}
