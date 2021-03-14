<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class clientRoute
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
        if (!$request->user()->can(['list_apps','show_apps_categories','show_app'])) {
            return redirect()->route('dashboard');
        }

        return $next($request);
    }
}
