<header class="bg-linear-to-t from-pink-100/70 to-pink-300/70 backdrop-blur-sm p-4 border-2 border-pink-300 rounded-t-lg">
    <div class="flex flex-col md:flex-row md:justify-between items-center">
        <div class="flex items-end">
            <img src="{{ asset('images/icons/softwire-icon-big.png') }}" alt="SoftWire Logo"
            class="size-20">
            <h1 class="text-6xl font-bold bg-linear-to-t from-pink-600 to-pink-300 bg-clip-text text-transparent">SoftWire</h1>
        </div>
        <div class="flex items-center gap-2 divide-x-2 text-pink-700 underline">
            @guest
            <a href="/login" class="px-2 hover:text-pink-500">Log in</a>
            <a href="/register" class="hover:text-pink-500">Make an account!</a>
            @endguest
            @auth
            @csrf
            <button" class="hover:text-pink-500 underline cursor-pointer" id="logout-button">
                Log out
                </button>

                @endauth
        </div>
    </div>
    <div class="flex md:justify-between justify-center items-center">
        @guest
        <p>You are not logged in ＞︿＜</p>
        @endguest
        @auth
        <p>Hii, <a class="underline text-pink-500 font-semibold" href="{{ route('profile.show', Auth::user()) }}"> {{ Auth::user()->name }}</a>!!! ₊˚⊹♡</p>
        @if(Auth::id() === 1)
        <a href="/admin" class="underline text-pink-700 cursor-pointer">Admin page</a>
        @endif
        @endauth
    </div>

</header>