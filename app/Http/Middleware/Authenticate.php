<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */


    public function handle($request, Closure $next)
    {
        if (!Auth::check()) {
            return route('login');
        }
    }

    protected function redirectTo($request)
    {
        return route('login');
    }
}
