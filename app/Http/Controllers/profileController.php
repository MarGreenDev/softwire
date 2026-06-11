<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        ]);

        auth()->user()->update([
            'pronouns' => $request->pronouns,
        ]);

        return back();
    }
}
