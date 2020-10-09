<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Closure;

class VerifyAdmin
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
        // Verifica que el usarios sea Admistrador
        if (\Auth::user()->role_id != 2) {
            // Si no es lo redirige
            return redirect('/movies');
        }
        
        // Si es admin lo deja pasar
        return $next($request);
    }
}
