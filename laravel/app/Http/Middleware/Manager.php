<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Http\Request;

class Manager
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
        if(!Auth::check()) {
            return redirect()->route('login');
        }

        // role 1 + 2 = manager
        if(Auth::user()->role == 1 | Auth::user()->role == 2) {
            return $next($request);
        }

        // role 3 = user
        if(Auth::user()->role == 3) {
        return redirect()->route('user');
        }
    }
}
