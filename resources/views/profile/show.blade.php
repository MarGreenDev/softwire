@extends('layouts.app')

@section('content')

<div class="grid grid-cols-1 md:grid-cols-12 bg-pink-100/30 backdrop-blur-sm p-6 col-span-12">

    <h2>
        {{ $user->name }}
    </h2>

</div>

@endsection