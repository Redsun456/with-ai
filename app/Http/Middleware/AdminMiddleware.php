<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
{
    if (Auth::check()) {
        if (Auth::user()->role === 'admin') {
            return $next($request);
        } else {
            return redirect('/dashboard');
        }
    }

    return redirect('/')->with('error', 'Please log in first.');
}

}
