<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Events\MessageSent;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::with('user')
            ->get();

        return view('chat', compact('messages'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'message' => ['required', 'string', 'max:500'],
        ]);

        $message = $request->user()->messages()->create([
            'message' => $validated['message']
        ]);

        $message->load('user');

        broadcast(new MessageSent($message));

        return redirect()->route('chat');
    }
}
