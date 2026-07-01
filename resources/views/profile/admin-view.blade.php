@extends('layouts.admin')

@section('title')
Softwire Admin {{ $user->name }}
@endsection

@section('content')

<div class="col-span-12">
    <a href="/admin">Back to admin panel</a>
</div>

<div>
    <h1 class="text-5xl font-bold">{{ $user->name }}</h1>

    @empty($user->profile_picture)
    <img src="{{ asset('images/default-pfp.jpg') }}" alt="profile picture">
    @else
    <img src="{{ Storage::url($user->profile_picture) }}" alt="profile picture">
    @endempty


</div>


@endsection