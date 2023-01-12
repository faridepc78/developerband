<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckAdminRole
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()['role'] == User::ADMIN) {
            return $next($request);
        } else {
            return abort(403);
        }
    }
}
