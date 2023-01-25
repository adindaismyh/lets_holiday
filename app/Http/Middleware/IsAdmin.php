<?php

namespace App\Http\Middleware;
use RealRashid\SweetAlert\Facades\Alert;
use Closure;

class IsAdmin
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
        if (auth()->user()->roleuser == 'Admin') {
            return $next($request);
        }
        Alert::error('Error', 'You dont have admin access');
        return redirect('home');
    }
}
