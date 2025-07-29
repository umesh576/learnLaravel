<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class userAgeCheck
{
    /**
     * Handle an incoming request.
     *\
     
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // echo"hello from middleware";
        if($request->age<18){
            die("baccha party cannot acces page");
        }
        return $next($request);
    }
}