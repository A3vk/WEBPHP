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
        $uri = explode('/', $request->path())[0];

            if ( $uri === 'admin' && Gate::allows('admin', Auth::user())){
                return $next($request);
            } else if ($uri === 'deadline' && Gate::allows('deadline', Auth::user())){
                return $next($request);
            }
            return redirect('/');
    }
}
