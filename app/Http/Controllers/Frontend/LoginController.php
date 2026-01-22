<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Show login page
     */
    public function index()
    {
        return view('frontend.login');
    }

    /**
     * Process login and verify user from database
     */
    public function store(Request $request)
    {
        // Validate input
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Credentials for DB check
        $credentials = $request->only('email', 'password');

        // Verify user from database
        if (Auth::attempt($credentials, $request->filled('remember'))) {

            // Prevent session fixation
            $request->session()->regenerate();

            // Redirect to new page after login
            return redirect()->route('dashboard')
                ->with('success', 'Login successful');
        }

        // If credentials are invalid
        return back()->withErrors([
            'email' => 'Invalid email or password',
        ])->withInput();
    }

    /**
     * Logout
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
