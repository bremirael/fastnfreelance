<?php

namespace App\Http\Middleware;

use Closure;

use Auth;

class FreelancerMiddleware
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
        if (Auth::user()->is_freelancer !== 1) {
          return redirect('/'); //redirige vers la page home
        }
        return $next($request);
    }
}
