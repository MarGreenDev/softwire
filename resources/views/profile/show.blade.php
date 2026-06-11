@extends('layouts.app')

@section('content')

<div class="grid grid-cols-1 md:grid-cols-12 bg-pink-100/30 backdrop-blur-sm p-3 col-span-12 gap-5">

    <div class="col-span-1 md:col-span-12 bg-contain min-h-30"
        style="background-image: url('{{ asset('images/default-banner.jpg') }}')">
    </div>

    <aside class="col-span-1 md:col-span-3 space-y-4">

        <!-- profile summary -->
        <section class="widget">
            <div class="widget-header">
                <h2>Hello</h2>
                @auth
                @if (Auth::id() === $user->id)
                <button id="summaryBtn" class="cursor-pointer">[Edit]</button>
                <button id="summaryCancel" class="hidden">[Cancel]</button>
                @endif
                @endauth
            </div>
            <div class="p-5 space-y-3">
                <img src="{{ asset('images/default-pfp.jpg') }}" alt="profile picture">
                <div class="flex text-center justify-center text-pink-900 font-bold">
                    <span>◈</span>
                    <h3>{{ $user->name }}</h3>
                </div>
                <div class="border-5 border-pink-500 border-double p-3">
                    <!-- pronouns -->
                    <form action="{{ route('profile.summary.update') }}" id="profileSummaryEdit" method="post" class="hidden">
                        @csrf
                        @method('PUT')
                        <div class="form-element">
                        <label for="pronouns" class="font-semibold text-pink-400">Pronouns:</label>
                        <input type="text" name="pronouns" id="pronouns" placeholder="pronouns" value="{{ $user->pronouns }}"
                        class="w-full h-7">
                        </div>
                        <button type="submit" class="btn-primary">Save</button>
                    </form>
                    <!-- status -->
                    <div id="profileSummary">
                        <!-- pronouns -->
                        <span class="font-semibold">Pronouns:</span>
                        @empty($user->pronouns)
                        <span>...</span>
                        @else
                        <span>{{ $user->pronouns }}</span>
                        @endempty

                        <!-- status message -->
                        <span class="font-semibold">Status:</span>
                        @empty($user->status)
                        <span>...</span>
                        @else
                        <span>{{ $user->status }}</span>
                        @endempty
                    </div>
                </div>
                @if (Auth::id() !== $user->id)
                <div class="flex justify-center">
                    <button class="btn-primary">Add friend</button>
                </div>
                @endif

            </div>
        </section>

        <div class="widget">
            <div class="widget-header">
                <h2>friends</h2>
            </div>
            <div class="grid grid-cols-3 gap-2 p-2">
                @for ($i = 0; $i < 3; $i++)
                    <img src="https://placehold.co/50" alt="placeholder image"
                    class="w-full aspect-square object-cover">
                    @endfor
            </div>
        </div>

    </aside>

    <section class="col-span-1 md:col-span-6 space-y-4">
        <div class="widget">
            <div class="widget-header">
                <h2>About me</h2>
                @auth
                @if (Auth::id() === $user->id) <!-- this checks whether the person whos viewing the page is the profile owner -->
                <div>
                    <button id="aboutmeBtn" class="cursor-pointer">[Edit]</button>
                    <button id="aboutmeCancel" class="cursor-pointer hidden">[Cancel]</button>

                </div>
                @endif
                @endauth
            </div>
            <div class="min-h-40">
                <form action="{{ route('profile.show.update') }}" id="aboutMe" method="post" class="hidden flex flex-col items-center">
                    @csrf
                    @method('PUT')
                    <textarea name="aboutMe"
                        placeholder="Tell us about yourself! Max: 1000 characters"
                        class="bg-pink-50 border-2 border-pink-300 p-3 text-sm h-40 w-full resize-none">{{ $user->about_me }}</textarea>

                    <button type="submit" class="btn-primary">Save</button>
                </form>

                <div id="aboutMeContent">
                    @empty($user->about_me)
                    <p class="text-pink-400 italic p-3">
                        There is nothing here...
                    </p>
                    @else
                    <p class="whitespace-pre-wrap p-3">{{ $user->about_me }}</p>
                    @endempty
                </div>
            </div>
        </div>

        <div class="widget">
            <div class="widget-header">
                <h2>Recent posts</h2>
            </div>

            <div class="flex flex-col divide-y">
                @for ($i = 0; $i < 3; $i++)
                    <div class="flex items-center gap-3 p-3">
                    <img src="https://placehold.co/70" alt="placeholder image">

                    <div>
                        <h3 class="font-bold text-pink-700">Post title</h3>
                        <p>Post description...</p>
                    </div>
            </div>
            @endfor
        </div>

</div>
</section>

<aside class="col-span-1 md:col-span-3 space-y-4">

    <section class="widget">
        <div class="widget-header">
            <h2>photo album</h2>
        </div>
        <div class="grid grid-cols-3 gap-2 p-2">

            @for ($i = 0; $i < 9; $i++)

                <img
                src="https://placehold.co/50"
                alt="placeholder image"
                class="w-full aspect-square object-cover">

                @endfor

        </div>


    </section>
    <div>
        <img src="{{ asset('images/cute.gif') }}" alt="">
    </div>

</aside>

<section class="widget col-span-1 md:col-span-12">
    <div class="widget-header">
        <h2>Guestbook</h2>
    </div>
    <p>No one has posted anything yet...</p>
</section>

</div>

@endsection