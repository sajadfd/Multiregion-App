<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class CityRedirect
{
    public function handle(Request $request, Closure $next)
    {

        if (!$request->session()->has('city') && !$request->is('*/about') && !$request->is('*/news')) {
            return redirect('/');
        }

        return $next($request);
    }
}
