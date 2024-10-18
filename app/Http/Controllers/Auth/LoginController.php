<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'identifier' => 'required',
            'password' => 'required',
        ]);

        // Determine if the identifier is an email or student number
        $credentials = [
            filter_var($request->identifier, FILTER_VALIDATE_EMAIL) ? 'email' : 'student_number' => $request->identifier,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {
            // Redirect based on user role
            if (Auth::user()->role === 'admin') {
                return redirect()->intended('/admin/dashboard');
            }

            // Redirect normal users
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors(['identifier' => 'Invalid login credentials.']);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }
}
