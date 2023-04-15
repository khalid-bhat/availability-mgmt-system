<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class UserRoleMiddleware
{
    CONST ROLE = ["patient" => 0 , "doctor" => 1];
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next,$role)
    {
        $roles = ["patient" => 0 , "doctor" => 1];
        if(Auth::check() && Auth::user()->role == UserRoleMiddleware::ROLE[$role])
        {
        return $next($request);
        }

        return response()->json(["You don't have permission to access this API"],403);
    }
}
