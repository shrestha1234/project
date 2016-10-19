<?php

namespace Lost\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/**
 * Class UserCheck
 * @package Lost\Http\Middleware
 */
class UserCheck
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

        if(Auth::check())
        {
            $route=Route::getCurrentRoute()->getAction();
          // print_r(Auth::user()->user_typeid);die();
            if(array_key_exists('role',$route))
            {
                if(Auth::user()->user_typeid!=$route['role'])
                {
                    return redirect()->route('login');
                }
            }
        }
        return $next($request);
    }
}
