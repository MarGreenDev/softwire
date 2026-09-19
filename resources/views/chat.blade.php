@extends('layouts.chat')

@section('content')

<div class="p-5 flex flex-col flex-1 min-h-0">
    <h2 class="text-2xl font-bold widget-header">
        Chatbox
    </h2>

    <div class="widget h-full flex-1 overflow-y-auto">


        @foreach ($messages as $message)
        <div class="flex gap-2 px-2">
            <strong>{{ $message->user->name }}:</strong>
            <p>{{ $message->message }}</p>
        </div>

        @endforeach
    </div>

    <form action="{{ route('chat.store') }}" method="POST">
        <div class="w-full flex">
            <textarea class="text-area-primary" name="message" id="chatmessage" required></textarea>
            <button class="btn-primary" type="submit">Send</button>
        </div>
    </form>

</div>

@endsection