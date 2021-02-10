<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class Superadmin
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
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        if (Auth::user()->role == 1) {
            return redirect()->route('loginsuperadmin');
        }

        if (Auth::user()->role == 2) {
            return redirect()->route('loginadmin');
        }

        if (Auth::user()->role == 3) {
            return redirect()->route('loginconsultant');
        }

        if (Auth::user()->role == 4) {
            return redirect()->route('loginadvisor');
        }

        if (Auth::user()->role == 5) {
            return redirect()->route('loginfrecurator');
        }
    }
}
