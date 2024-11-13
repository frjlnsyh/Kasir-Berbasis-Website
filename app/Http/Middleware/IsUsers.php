<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsUsers
{
    
    public function handle($request, Closure $next)
    {
        if(auth()->user()->is_users == 1){
            return $next($request);
        }
   
        return redirect('home')->with('error',"You don't have admin access.");
    }
}
