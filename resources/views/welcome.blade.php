@extends('layouts.app')

@section('content')

<div class="bg-pink-100/30 backdrop-blur-sm col-span-12">
    @include('partials.announcement-banner')
    <div class="grid grid-cols-1 md:grid-cols-12 p-6 col-span-12 gap-5">

        <aside class="col-span-1 md:col-span-3 space-y-3">


        @if ($featuredUser)
            @include('partials.widgets.featured-user')
           @endif 

            @include('partials.widgets.search-user')

            @include('partials.widgets.friends-online')

            <img src="images/nyancat.gif" alt="nyan cat gif">
        </aside>

        <section class="grid grid-cols-1 md:grid-cols-9 col-span-1 md:col-span-9 gap-5">
            @include('partials.widgets.github-repo')


            @include('partials.widgets.featured-video')

        </section>

        <aside class="col-span-1 md:col-span-3">

            

        </aside>

    </div>
</div>
@endsection