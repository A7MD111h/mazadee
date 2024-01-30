<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
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
        if (Auth::guard('admin')->check()) {
            return $next($request);
        }

        return redirect('/admin/dashboard/login'); // Redirect to the admin login page
    }
    // public function handle($request, Closure $next)
    // {
    //     if (Auth::guard('admin')->check()) {
    //         return $next($request);
    //     }

    //     return redirect('/admin/login'); // Redirect to the admin login page
    // }

}
