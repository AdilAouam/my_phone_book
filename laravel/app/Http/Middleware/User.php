<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Http\Request;

class User
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

        // role 1 + 2 + 3 = user
        if(Auth::user()->role == 1 | Auth::user()->role == 2 | Auth::user()->role == 3) {
        return $next($request);
        }

    }
}
