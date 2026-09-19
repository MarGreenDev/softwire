@extends('layouts.chat')

@section('content')

<div class="p-5 flex flex-col flex-1 min-h-0">
    <h2 class="text-2xl font-bold widget-header">
        Chatbox
    </h2>

    <div class="widget h-full flex-1 overflow-y-auto">
        <!-- messages will be displayed here -->
    </div>

    <div class="w-full flex">
        <textarea class="text-area-primary" name="message" id="chatmessage"></textarea>
        <button class="btn-primary">Send</button>
    </div>

</div>

@endsection