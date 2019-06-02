<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class UserTypeCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $userType = Auth::guard('admin')->user()->user_type;
        if ($userType != 'admin') {
            return redirect()->back();
        }
        return $next($request);
    }
}
