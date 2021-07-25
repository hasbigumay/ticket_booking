<?php

namespace App\Http\Middleware;

use Closure;

class loginware
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
        $user=$request->session()->get("username");
        if (is_null($user)){
            $user=$request->session()->forget("username");
            return redirect('/users/login');
        }
        return $next($request);
    }
}
