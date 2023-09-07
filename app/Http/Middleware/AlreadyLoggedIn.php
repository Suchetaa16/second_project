<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AlreadyLoggedIn
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

    //  Isko thik kariye, Middleware add ho gayayaha kya galat ha sir, agar session nhi hai, and route login and register nhi hai tab login page pe redirect kr dijiye
    public function handle(Request $request, Closure $next): Response
    {
        if(Session()->has('loginId')&&(url('/login')==$request->url()||url('/registration')==$request->url()||url('/home')==$request->url()))
        {
            return back();
        }
        return $next($request);
    }
}
