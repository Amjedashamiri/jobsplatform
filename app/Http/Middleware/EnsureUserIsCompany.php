<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnsureUserIsCompany
{
    public function handle(Request $request, Closure $next)
    {
        // Check if the user is authenticated and if the user type is 'company'
        if (Auth::check() && Auth::user()) {
            return $next($request);
        }

        // Redirect the user with an alert if they are not a company type
        return redirect('login')->with('alert', 'You must create an account and register as a company type first.');
    }
}