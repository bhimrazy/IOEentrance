<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class issubAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {   if($user = Auth::user()){
            if(!$user->role->name=='subAdmin'){
            return $next($request); 
            }
        }
        return redirect()->back();
    }
}
