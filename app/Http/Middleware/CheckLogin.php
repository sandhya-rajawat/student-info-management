<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckLogin
{
    public function handle(Request $request, Closure $next)
    {
        // Sirf login session check karenge
        if (!session()->has('profile')) {
            return redirect('signin')->with('error', 'Please login first.');
        }

        return $next($request);
    }
}
