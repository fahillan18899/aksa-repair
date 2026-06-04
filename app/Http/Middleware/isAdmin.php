<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (! Auth::check()) {
            return redirect()->route('login')->with('error', 'Please login first');
        }

        if (Auth::user()->user_role == 'admin') {
            return $next($request);
        } elseif (Auth::user()->user_role == 'user') {
            return redirect()->route('user.dashboard');
        } elseif (Auth::user()->user_role == 'teknisi') {
            return redirect()->route('teknisi.dashboard');
        } elseif (Auth::user()->user_role == 'marketing') {
            return redirect()->route('marketing.dashboard');
        } elseif (Auth::user()->user_role == 'akuntan') {
            return redirect()->route('akuntan.dashboard');
        } elseif (Auth::user()->user_role == 'admin_ppm') {
            return redirect()->route('monitoring.dashboardPpm');
        }

        return redirect()->route('user.dashboard');
    }
}
