<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        $user = Auth::user();

        if (!$user || !$user->isAdmin) {
            abort(404);
        }

        return $next($request);
    }
}
