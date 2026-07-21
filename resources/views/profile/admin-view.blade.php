@extends('layouts.admin')

@section('title')
Softwire Admin: {{ $user->name }}
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
    <form action="{{ route('users.removeField', $user) }}" method="post">
        @csrf
        @method('PATCH')

        <input type="hidden" name="field" value="profile_picture">
        <button class="btn-primary">Remove profile picture</button>
    </form>
    @endempty

</div>

<div class="col-span-4 bg-pink-50 p-4 flex flex-col">
    @empty($user->about_me)
    <p>This user hasn't written an about me yet</p>
    @else
    <p class="flex-1">{{ $user->about_me }}</p>


    <form action="{{ route('users.removeField', $user) }}" method="post">
        @csrf
        @method('PATCH')
        
        <input type="hidden" name="field" value="about_me">
        <button class="btn-primary">Remove about me</button>

    </form>
    @endempty
</div>

@include('partials.admin.widgets.user-guestbook-entries')

@endsection