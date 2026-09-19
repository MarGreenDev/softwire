<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::with('user')
            ->latest()
            ->get();

        return view('chat', compact('messages'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'message' => ['required', 'string', 'max:500'],
        ]);

        $request->user()->messages()->create([
            'message' => $validated['message'],
        ]);

        return redirect()->route('chat');
    }
}
