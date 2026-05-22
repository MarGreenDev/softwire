<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SoftWire</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-linear-to-t from-pink-200 to-white-50 text-pink-400 ">
    <h1 class="text-6xl font-bold text-center">This is the homepage :3</h1>
    @guest
    <p>You are not logged in ＞︿＜</p>
    @endguest
    @auth
    {{ Auth::user()->name }}
    @endauth
    <div class="flex justify-center">
        <a href="/login" class="btn-primary">Log in</a>
        <a href="/register" class="btn-primary">Make an account!</a>
    </div>
</body>

</html>