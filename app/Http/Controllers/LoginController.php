<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController
{
    public function index()
    {
        return view('login');
    }

    public function authenticate(Request $request)
{
    $email = $request->email;
    $password = $request->password;

    // Login admin
    if ($email === 'admin@gmail.com' && $password === '123') {
        return redirect('/dashboard');
    }

    // Login user
    if (Auth::attempt(['email' => $email, 'password' => $password])) {
        $request->session()->regenerate();
        return redirect('/');
    }

    return back()->with('error', 'Email atau password salah');
}

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
