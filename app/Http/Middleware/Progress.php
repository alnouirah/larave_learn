<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class Progress
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
        $progress = Auth::guard('candidate')->user()->progress;
        is_null($progress) ? $progress = 0 :  $progress = Auth::guard('candidate')->user()->progress->sum('value');
        is_null($progress) ? $progressChecked = 0 :  $progressChecked = Auth::guard('candidate')->user()->progress;
        \View::share('progress', $progress);
        \View::share('progressChecked', $progressChecked);
        return $next($request);
    }
}
