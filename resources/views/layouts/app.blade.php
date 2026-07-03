<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SoftWire')</title>

    @vite(['resources/css/app.css', 'resources/js/app.ts'])
</head>


<body class="min-h-screen flex flex-col bg-cover text-pink-400"
    style="background-image: url('/images/background.jpg')">

    <div class="max-w-5xl mx-auto pt-6 flex-1 flex flex-col w-full">

        <!-- header -->
        @include('partials.header')

        <!-- nav -->
        @include ('partials.nav')

        <main class="w-full flex-1 flex flex-col">

            @yield('content')

        </main>

    </div>
    @include('partials.footer')
    
    @include('partials.logout-popup')
</body>

</html>