<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Show the password form to access the portfolio.
     *
     * @return \Illuminate\View\View
     */
    public function showPasswordForm()
    {
        return view('password');
    }

    /**
     * Check the entered password and grant access if correct.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function checkPassword(Request $request)
    {
        $password = env('PORTFOLIO_PASSWORD'); // Retrieve the password from .env

        if ($request->input('password') === $password) {
            // Set a session variable to allow access
            $request->session()->put('portfolio_access_granted', true);
            return redirect()->route('portfolio');
        } else {
            // Redirect back to form with an error message if the password is incorrect
            return back()->withErrors(['password' => 'Incorrect password.']);
        }
    }

    /**
     * Display the portfolio page if access is granted.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View|\Illuminate\Http\RedirectResponse
     */
    public function index(Request $request)
    {
        // Render the portfolio page (access already granted by middleware)
        return view('portfolio');
    }
}

