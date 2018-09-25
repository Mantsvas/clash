<?php

namespace App\Http\Middleware;

use Closure;

class IsTournamentModerator
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
        if( !(Auth()->user() && Auth()->user()->tournament_moderator === 1)){
         return redirect ('/');
       }else{
         return $next($request);
       }
    }
}
