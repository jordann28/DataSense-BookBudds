<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Authenticate
{
    public function handle(Request $request, Closure $next)
    {
        // Check if the user is authenticated
        if (!Auth::check()) {
            // If not authenticated, redirect to the login page
            return redirect()->route('login');
        }

        // If authenticated, proceed with the request
        return $next($request);
    }
}
