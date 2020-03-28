<?php

namespace App\Http\Middleware;

use Closure;
use Gate;
use Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next){
            if (Gate::allows('admin', Auth::user())){
                return $next($request);
            }
            return redirect('/');
    }
}
