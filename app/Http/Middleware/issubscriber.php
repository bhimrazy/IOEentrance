<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class issubscriber
{
    /**
     * Handle an incoming request.w
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($user = Auth::user()){
            if($user->role->name=='Subscriber'){
            return $next($request); 
            }
        }
        return redirect()->back();
    }
}
