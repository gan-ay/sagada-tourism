<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // In real use, save user to DB. For now, store in session.
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:4',
        ]);

        Session::put('user', [
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return redirect()->route('dashboard');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Simple check (temporary for demo)
        if ($request->email === 'test@example.com' && $request->password === '1234') {
            Session::put('user', ['name' => 'Test User', 'email' => $request->email]);
            return redirect()->route('dashboard');
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function dashboard()
    {
        if (!Session::has('user')) {
            return redirect()->route('login');
        }

        return view('dashboard', ['user' => Session::get('user')]);
    }

    public function logout()
    {
        Session::forget('user');
        return redirect()->route('home');
    }
}
