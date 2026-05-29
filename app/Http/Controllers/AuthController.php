<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|unique:users',
            'name' => 'required|unique:users',
            'password' => 'required|min:6|confirmed',
        ], [
            'email.required' => 'Please enter your email',
            'name.required' => 'Please choose a username',
            'password.required' => 'Can\'t really make an account without a password ;3',
            'email.email' => 'please make sure it\'s an actual email',
            'email.unique' => 'E-mail already taken :(',
            'name.unique' => 'Username already taken :(',
            'password.confirmed' => 'these passwords don\'t match'
        ]);

        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        return redirect('/login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate(
            [
                'name' => 'required',
                'password' => 'required',
            ],
            [
                'name.required' => 'Please fill in your username!',
                'password.required' => 'Please fill in your password!',
            ]
        );

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

            return redirect('/');
        }

        return back()->withErrors([
            'name' => 'Incorrect username or password!! (；′⌒`)'
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerate();

        return redirect('/');
    }
}
