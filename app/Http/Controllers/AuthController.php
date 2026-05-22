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
        $validated = $request->validate(

    [
        'email' => 'required|email|unique:users',
        'name' => 'required|unique:users',
        'password' => 'required|min:6|confirmed',
    ],

    [
        'email.required' => '(╥﹏╥) Please enter your e-mail!',
        'email.email' => 'That does not look like a valid e-mail...',
        'email.unique' => 'This e-mail is already being used!',

        'name.required' => 'Please choose a username!',
        'name.unique' => 'That username is already taken ＞﹏＜',

        'password.required' => 'Please enter a password!',
        'password.min' => 'Password must be at least 6 characters!',
        'password.confirmed' => 'Passwords do not match!',
    ]

);

        return redirect('/login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'name' => 'required',
            'password' => 'required',
        ],
        
        [
            'name.required' => 'Please fill in ur username',
            'password.required' => 'Please fill in ur password',
        ]);

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

            return redirect('/');
        }

        return back()->withErrors([
            'login' => 'Invalid username or password （＞人＜；）'
        ]);
    }
}
