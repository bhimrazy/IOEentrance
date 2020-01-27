<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Session;
class isAdmin
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
        if($user = Auth::user()){
            if($user->role->name=='Admin'){
            return $next($request); 
            }
        }
        Session::flash('warning','You don\'t have permission to access the page ');
        return redirect()->back();
    }
}
