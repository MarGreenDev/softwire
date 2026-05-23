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
        $credentials = $request->validate([
            'name' => 'required',
            'password' => 'required',
        ],
        [
            'name.required' => 'Please fill in all fields! (* ￣︿￣)',
            'password.required' => 'Please fill in all fields! (* ￣︿￣)',
        ]);

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
