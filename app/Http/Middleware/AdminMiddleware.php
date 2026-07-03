<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check()) {
            //user is not logged in
            return redirect('/');
        }

        if (Auth::check()) {
            //user is logged in
            if (Auth::id() !== 1) {
                return redirect('/');
            }
        }



        return $next($request);
    }
}
