@extends('layouts.app')

@section('content')

<div class="bg-pink-100 flex flex-col">
    @foreach ($users as $user)
    {{ $user->name }}
    @empty($user->profile_picture)
    <img src="{{ asset('images/default-pfp.jpg') }}" alt="profile picture"
    class="size-15 aspect-square">
    @else
    <img src="{{ Storage::url($user->profile_picture) }}" alt="profile picture"
    class="size-15 aspect-square">
    @endempty
    @endforeach
</div>
@endsection