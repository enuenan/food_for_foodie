<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class IsConsumerLoggedIn
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
        if($request->session()->get('userrole')!='foodie'){
            return redirect()->to('unauthorized2');
        }
        return $next($request);
    }
}
