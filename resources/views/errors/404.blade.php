@extends('layouts.app')

@section('title', '404 - not found')

@section('content')

<div class="flex-1 bg-pink-100/30 backdrop-blur-sm p-3">
    <div class="font-bold text-pink-700 text-center text-3xl flex flex-col gap-4 p-5">
        <h2>Page not found!</h2>

        <p class="font-semibold text-xl">I've looked everywhere, but I just can't seem to find the page you're looking for... :/</p>

    </div>

    <div class="flex justify-center">
        <a href="/" class="btn-primary text-lg">Back to home page</a>
    </div>

    <img src="{{ asset('images/thinking-monkey.png') }}" alt="thinking monker" class="mx-auto w-2xs hue-rotate-270 saturate-150 opacity-80 pt-4">

</div>


@endsection