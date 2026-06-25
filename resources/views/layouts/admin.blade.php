<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    @vite(['resources/css/app.css', 'resources/js/app.ts'])
</head>
<body class="bg-pink-200 min-h-screen flex flex-col">
    
    @include('partials.admin.header')
    <main class="grid grid-cols-12 gap-12 p-10">

        @yield('content')

    </main>
</body>
</html>