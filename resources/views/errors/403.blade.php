@extends('layouts.app')

@section('title', '403 - Access denied')

@section('content')
    <div class="flex-1 bg-pink-100/30 backdrop-blur-sm p-3">
        <div class="font-bold text-pink-700 text-center text-3xl flex flex-col gap-4 p-5">
            <h2 class="">Access denied :-(</h2>
            <p
                class="font-semibold">
                You have no permission to view this page!
            </p>
        </div>
        <div class="flex justify-center">
            <a href="/" class="btn-primary text-lg">Back to home page</a>
        </div>
        <img src="{{ asset('images/cute.gif') }}" alt="flushed" class="mx-auto p-2 w-sm">
    </div>
@endsection