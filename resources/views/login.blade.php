<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-linear-to-t from-pink-100 to-white-50 text-pink-400">
    <h1 class="text-6xl font-bold">Login page!</h1>
    <main class="flex items-center justify-center">

        <div class="form-container">
            <form action="/login" method="post" class="flex flex-col gap-4">
                @csrf
                <div class="form-element">
                    <label for="username">Username:</label>
                    <input type="text" name="name" id="username" placeholder="Username">
                </div>
                <div class="form-element">
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" placeholder="••••••••">
                </div>
                <button type="submit" class="btn-primary">Log in (✿◠‿◠)</button>
            </form>
        </div>
    </main>
    <div>
        <span class="text-pink-900">Don't have an account?</span>
        <a href="/register" class="underline">Make an account here! ヾ(•ω•`)o</a>
    </div>
</body>

</html>