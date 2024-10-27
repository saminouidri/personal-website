<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PortfolioPassword
{
    public function handle(Request $request, Closure $next)
    {
        // Check if the session has granted access
        if ($request->session()->get('portfolio_access_granted')) {
            return $next($request);
        }

        // Redirect to password form if access is not granted
        return redirect()->route('password');
    }
}
