<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TouristLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login'); // your existing tourist login
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email','password');

        // explicitly use 'web' (tourists) guard if configured
        if (Auth::guard('web')->attempt($credentials, $request->filled('remember'))) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'email' => 'Invalid credentials.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
