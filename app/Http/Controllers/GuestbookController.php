<?php

namespace App\Http\Controllers;

use App\Models\GuestbookEntry;
use Illuminate\Http\Request;
use App\Models\User;

class GuestbookController extends Controller
{
    public function store(Request $request, User $user)
    {
        $request->validate([
            'message' => 'required|string|max:1000',
        ]);

        GuestbookEntry::create([
            'profile_id' => $user->id,
            'author_id' => auth()->id(),
            'message' =>$request->message,
        ]);

        return back();
    }
}
