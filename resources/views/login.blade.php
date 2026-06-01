@extends ('layouts.app')

@section('content')

<div class="bg-pink-100 backdrop-blur-sm p-3">
    <div class="flex items-center justify-center">

        <div class="form-container">
            <form action="/login" method="post" class="flex flex-col">
                @csrf
                <div class="form-element">
                    <label for="username">Username:</label>
                    <input type="text" name="name" id="username" placeholder="Username" value="{{ old('name' )}}">
                </div>
                <div class="form-element">
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" placeholder="••••••••">
                </div>
                <button type="submit" class="btn-primary">Log in (✿◠‿◠)</button>
            </form>
            @include('partials.error-popup')
        </div>
    </div>
    <div class="flex justify-center">
        <span class="text-pink-900">Don't have an account?</span>
        <a href="/register" class="underline">Make an account here! ヾ(•ω•`)o</a>
    </div>

    <img src="{{ asset('images/cute.gif') }}" alt="cute gif"
    class="mx-auto">

</div>


@endsection