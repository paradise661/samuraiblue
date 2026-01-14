<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        if (!$request->expectsJson()) {

            if ($request->is('user/*')) {
                return route('user.login');
            }

            if ($request->is('company/*')) {
                return route('company.login');
            }

            return route('login'); // admin / default
        }

        return null;
    }
}
