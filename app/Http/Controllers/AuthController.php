<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showRegister()
    {
        return view('register');
    }

    // Register form submission
    public function register(Request $request)
    {
        $fields = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:users,email'], // checks for email existence
            'password' => ['required', 'min:8', 'confirmed'],
        ]);

        // user creating in database
        $user = User::create([
            'name' => $fields['name'],
            'email' => $fields['email'],
            'password' => Hash::make($fields['password']),
        ]);

        Auth::login($user); // logs in immediately after registeration

        return redirect()->intended('/'); // redirected to home page
    }

    public function showLogin()
    {
        return view('login');
    }

    // Login form submission
    public function login(Request $request)
    {
        // validations
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // login attempt (user)
        $remember = $request->filled('remember');
        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();
            return redirect()->intended('/'); // redirecting to home page
        }

        // message for wrong information
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records!',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
