<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class LogoutIfUserDisabled
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check() && 1 !== Auth::guard($guard)->user()->user->status) {
            Auth::guard($guard)->logout();

            if ($request->expectsJson()) {
                return api([], 401, '你的账号被停用，请联系客服。');
            }

            return redirect('/')->with('danger', '你的账号被停用，请联系客服。');
        }

        return $next($request);
    }
}
