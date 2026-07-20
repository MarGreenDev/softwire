@extends('layouts.admin')

@section('title')
Softwire Admin {{ $user->name }}
@endsection

@section('content')

<div class="col-span-12">
    <a href="/admin">Back to admin panel</a>
</div>

<div class="col-span-3">
    <h1 class="text-5xl font-bold">{{ $user->name }}</h1>

    @empty($user->profile_picture)
    <img src="{{ asset('images/default-pfp.jpg') }}" alt="profile picture" class="aspect-square object-cover">
    @else
    <img src="{{ Storage::url($user->profile_picture) }}" alt="profile picture" class="aspect-square object-cover">
    @endempty

</div>

<div class="col-span-4 bg-pink-50">
    <p>{{ $user->about_me }}</p>
</div>


@endsection