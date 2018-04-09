<?php

namespace App\Http\Middleware;

use Closure;
use Sentinel;

class AdminMiddleware
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
        //1. User should be authenticated
        if(Sentinel::check() )
        {           
            // 2. the user shoul be a admin
            if(Sentinel::getUser()->roles()->first()->slug == 'admin') {
                return $next($request);
            }

            return redirect('/');
            
        }else{
            return redirect('/login');
        }        
    }
}
