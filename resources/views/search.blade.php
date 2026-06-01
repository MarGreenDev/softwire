@extends('layouts.app')

@section('content')

<div class="bg-pink-100/30 backdrop-blur-sm col-span-12">
    @include('partials.announcement-banner')
    <div class="grid grid-cols-1 md:grid-cols-12 p-6 col-span-12 gap-5">

        <aside class="col-span-1 md:col-span-3 space-y-3">

            @include('partials.widgets.featured-user')

            @include('partials.widgets.search-user')

            <img src="images/nyancat.gif" alt="nyan cat gif">
        </aside>

        <div class="widget col-span-1 md:col-span-6">

            <div class="widget-header">
                <h2>Search results for: {{ $search }}</h2>
            </div>

            <div class="divide-y">
                @forelse ($users as $user)

                <div class="p-3">
                    <img src="{{ asset('images/default-pfp.jpg') }}" alt="profile picture"
                        class="w-20 aspect-square">

                    <div class="flex justify-between gap-5">
                        <p>
                            <a href="{{ route('profile.show', $user) }}">
                                {{ $user->name }}
                            </a>
                        </p>
                        <p>
                            <a href="{{ route('profile.show', $user) }}"
                                class="text-pink-700 text-xs font-semibold">
                                View this profile ->
                            </a>
                        </p>
                    </div>
                </div>
                @empty

                <p>
                    No one found :/
                </p>

                @endforelse
            </div>
        </div>
    </div>
</div>

@endsection