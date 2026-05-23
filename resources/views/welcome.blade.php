@extends('layouts.app')

@section('content')

<div class="grid grid-cols-1 md:grid-cols-12 bg-pink-100/30 backdrop-blur-sm p-6 col-span-12">

    <aside class="col-span-1 md:col-span-3">
        @auth
        @include('partials.widgets.featured-user')
        @endauth
    </aside>

    <section class="col-span-1 md:col-span-6">

    </section>

    <aside class="col-span-1 md:col-span-3">
    </aside>

</div>

@endsection