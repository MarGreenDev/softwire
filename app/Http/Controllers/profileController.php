<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class profileController extends Controller
{
    public function updateAboutMe(Request $request)
    {
        $request->validate([
            'aboutMe' => 'nullable|string|max:1000',
        ]);

        auth()->user()->update([
            'about_me' => $request->aboutMe,
        ]);

        return back();
    }

    public function updateSummary(Request $request)
    {
        $request->validate([
            'pronouns' => 'nullable|string|max:15',
            'status' => 'nullable|string|max:30',
        ]);

        auth()->user()->update([
            'pronouns' => $request->pronouns,
            'status' => $request->status,
        ]);

        return back();
    }

    public function updatePfp(Request $request)
    {
        $request->validate([
            'profile_picture' => 'image|max:2048',
        ]);

        $pfpPath = $request->file('profile_picture')->store('profile-pictures', 'public');

        auth()->user()->update([
            'profile_picture' => $pfpPath,
        ]);


        return back();
    }

    public function updateBirthday(Request $request)
    {
        $request->validate([
            'dob' => [
                'date',
                'required',
                'before_or_equal:today',
                'after_or_equal:' . now()->subYears(120)->toDateString(),
            ],
        ]);

        auth()->user()->update([
            'dob' => $request->dob,
        ]);

        return back();
    }
}
