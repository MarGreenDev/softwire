@extends('layouts.chat')

@section('content')

<div class="p-5 h-full flex flex-col min-h-0">
    <h2 class="text-2xl font-bold widget-header">
        Chatbox
    </h2>

    <div id="messageContainer"
        class="widget flex-1 min-h-0 overflow-y-auto">

        @foreach ($messages as $message)
        <div class="flex gap-2 px-2">
            <strong>{{ $message->user->name }}:</strong>
            <p>{{ $message->message }}</p>
        </div>
        @endforeach

    </div>

    <form id="chatForm" action="{{ route('chat.store') }}" method="POST">
        @csrf

        <div class="w-full flex">
            <input
                type="text"
                class="text-area-primary"
                name="message"
                id="chatmessage"
                required>

            <button class="btn-primary" type="submit">
                Send
            </button>
        </div>
    </form>
</div>

@endsection