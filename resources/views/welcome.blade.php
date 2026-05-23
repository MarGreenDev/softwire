<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SoftWire</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-cover text-pink-400"
    style="background-image: url(/images/background.jpg);">
    <div class="max-w-5xl mx-auto pt-6">
        <header class="bg-pink-100/70 backdrop-blur-sm p-6 border-2 border-pink-300 rounded-t-lg">
            <div class="flex justify-between">
                <h1 class="text-6xl font-bold">SoftWire . ݁₊ ⊹</h1>
                <div class="flex items-center gap-2 divide-x-2 text-pink-700 underline">
                    @guest
                    <a href="/login" class="px-2 hover:text-pink-500">Log in</a>
                    <a href="/register" class="hover:text-pink-500">Make an account!</a>
                    @endguest
                    @auth
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="hover:text-pink-500 underline cursor-pointer">
                            Log out
                        </button>
                    </form>
                    @endauth
                </div>
            </div>
            <div>
                @guest
                <p>You are not logged in ＞︿＜</p>
                @endguest
                @auth
                <p>Hii, {{ Auth::user()->name }}!!! ₊˚⊹♡</p>
                @endauth
            </div>

        </header>
        <nav class="text-pink-900 text-center underline flex gap-3 justify-center backdrop-blur-lg divide-x-2 divide-pink-900">
            <a href="#" class="px-2">Home</a>
            <a href="#" class="px-2">Popular</a>
            <a href="#" class="px-2">FAQ</a>
            <a href="#" class="px-2">Contact</a>
            <a href="#" class="px-2">Refer a friend</a>
        </nav>
    </div>
    <main class="max-w-5xl mx-auto pt-6 bg-pink-100/70 backdrop-blur-sm border-2 border-pink-300 rounded-t-lg">

        <aside>
            <!-- friendslist? -->
        </aside>

    </main>
</body>

</html>