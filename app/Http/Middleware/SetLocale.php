<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Cookie;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {  
        $data = $request->segment(1); 
       // response('Data stored in cookie')->withCookie(Cookie::make('my_cookie', $data, 24 * 60));
        $request->session()->put('data', $data);
        app()->setLocale($request->segment(1));
        return $next($request);
    }
}
