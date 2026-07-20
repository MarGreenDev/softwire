<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function removeField(Request $request, User $user) {

    $allowed = [
        'about_me',
        'pronouns',
        'profile_picture',
        'status',
    ];

    $field = $request->input('field');

    if (! in_array($field, $allowed)) {
        abort(400);
    }

    $user->$field = null;
    $user->save();

    return back()->with('success', "Field removed.");
    }
}
