<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;

class CheckUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
      /*   if (is_null(session('user'))) {
            return redirect(route('home_off'));
        } */

        return $next($request);
    }
}
