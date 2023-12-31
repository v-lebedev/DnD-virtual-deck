<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Аутентификация пройдена...
            return redirect()->intended('dashboard');
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect('login');
    }
}
