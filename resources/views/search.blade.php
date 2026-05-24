@extends('layouts.app')

@section('content')

    <div class="widget">

    <h2>Search results for {{ $search }}</h2>

    @forelse ($users as $user)

    <p>
        <a href="{{ route('profile.show', $user) }}">
            {{ $user->name }}
        </a>
    </p>

    @empty

        <p>
            No one found :/
        </p>

        @endforelse

    </div>

@endsection