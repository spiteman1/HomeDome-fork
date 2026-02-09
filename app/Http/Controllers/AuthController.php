<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthController extends Controller
{

    private function requireAdmin(){
    if (!Auth::check() || !Auth::user()->is_admin) {
        abort(403); }
        }

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
        if (Auth::user()->is_admin && Auth::user()->must_change_password) {
            return redirect('/force-password-change');
    }

    return redirect()->intended('/');
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

    public function showForcePasswordChange() {
    return view('force-change-password'); 
    }

    public function forcePasswordChange(Request $request) {
    $request->validate([
        'password' => ['required', 'string', 'min:8', 'confirmed'],
    ]);

    $user = Auth::user();


    if (Hash::check($request->password, $user->password)) {
        return back()->withErrors([
        'password' => 'New password can not be the same as current password.',
    ])->withInput(); 
    }

    $user->password = Hash::make($request->password);
    $user->must_change_password = 0;
    $user->save();

    $request->session()->regenerate();

    return redirect()->intended('/'); }

    public function showCreateAdmin() {
    $this->requireAdmin();
    return view('create-admin'); }

public function createAdmin(Request $request) {
    $this->requireAdmin();

    $fields = $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'email', 'unique:users,email'],
    ]);

    $tempPassword = 'Admin-' . random_int(100000, 999999);

    $admin = User::create([
        'name' => $fields['name'],
        'email' => $fields['email'],
        'password' => Hash::make($tempPassword),
        'is_admin' => 1,
        'must_change_password' => 1,
    ]);

    return view('create-admin-success', [
        'adminName' => $admin->name,
        'adminEmail' => $admin->email,
        'tempPassword' => $tempPassword,
    ]); 
    }
    
    public function showAdminChangePassword() {
    $this->requireAdmin();
    return view('admin-change-password'); }

public function adminChangePassword(Request $request) {
    $this->requireAdmin();

    $request->validate([
        'current_password' => ['required', 'string'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
    ]);

    $user = Auth::user();

    if (!Hash::check($request->current_password, $user->password)) {
        return back()->withErrors([
            'current_password' => 'Your current password is incorrect.',
        ]);
    }

    if (Hash::check($request->password, $user->password)) {
        return back()->withErrors([
            'password' => 'New password can not be the same as current password.',
        ]);
    }

    $user->password = Hash::make($request->password);
    $user->save();

    $request->session()->regenerate();

    return redirect('/')->with('success', 'Password updated successfully.'); 
    }

public function showCustomerChangePassword() {
    return view('customer-change-password'); 
    }

public function customerChangePassword(Request $request) {
    $request->validate([
        'current_password' => ['required', 'string'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
    ]);

    $user = Auth::user();

    if (!Hash::check($request->current_password, $user->password)) {
        return back()->withErrors([
            'current_password' => 'Your current password is incorrect.',
        ]);
        }

    if (Hash::check($request->password, $user->password)) {
        return back()->withErrors([
            'password' => 'New password can not be the same as current password.',
        ]); 
        }

    $user->password = Hash::make($request->password);
    $user->save();

    $request->session()->regenerate();

    return redirect('/')->with('success', 'Password updated successfully.'); }
}