<?php

namespace App\Http\Middleware;

use App\Models\AppUser;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Symfony\Component\HttpFoundation\Response;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!session()->has('user_id')) {
            if (Cookie::has('remember_token')) {
                $token = Cookie::get('remember_token');
                $user = AppUser::where('remember_token', $token)->first();

                if ($user) {
                    session(['user_id' => $user->user_id]);
                    session()->regenerate();
                }
            }
        }

        if (!session()->has('user_id')) {
            return redirect()->route('login.index')->with('error', 'Please log in to continue.');
        }

        return $next($request);
    }
}
