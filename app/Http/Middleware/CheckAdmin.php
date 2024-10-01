<?php
// app/Http/Middleware/CheckAdmin.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class CheckAdmin
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
        Log::info('CheckAdmin middleware is being called.');

        if (Auth::check() && Auth::user()->user_type == 1) {
            return $next($request);
        }

        return redirect()->route('dashboard')->withErrors(['access' => 'You do not have access to this page.']);
    }
}