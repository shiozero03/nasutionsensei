<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

use Session;

class LoginProcess
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
        $id = Session('loginid');
        if(!Session('loginid')){
            return redirect('/admin')->with('failedSession', 'failedSession');
        }
        return $next($request);
    }
}
