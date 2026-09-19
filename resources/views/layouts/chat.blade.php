<!DOCTYPE html>
<html>

<head>
    <title>SoftWire Chat</title>
    @vite(['resources/css/app.css', 'resources/js/app.ts'])
</head>

<body class="min-h-screen flex flex-col bg-cover text-pink-400"
    style="background-image: url('/images/background.jpg')">

    <header class="bg-linear-to-t from-pink-100/70 to-pink-300/70 backdrop-blur-sm p-4 border-2 border-pink-300">
        <div class="flex flex-col md:flex-row md:justify-between items-center">
            <div class="flex items-end">
                <img src="{{ asset('images/icons/softwire-icon-big.png') }}" alt="SoftWire Logo"
                    class="w-10 h-10">
                <h1 class="text-4xl font-bold bg-linear-to-t from-pink-600 to-pink-300 bg-clip-text text-transparent">SoftWire Chatroom</h1>
            </div>
        </div>
    </header>
    <main class="flex flex-col flex-1">
        @yield('content')
    </main>
</body>

</html>