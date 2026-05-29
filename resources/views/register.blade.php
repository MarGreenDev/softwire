<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-linear-to-t from-pink-200 to-white-50 text-pink-400">
    <h1 class="text-6xl font-bold text-center">Registration page!</h1>

    <main class="flex items-center justify-center">

        <div class="form-container">
            <form action="/register" method="post" class="flex flex-col" novalidate>
                @csrf
                <div class="form-element">
                    <label for="email">E-mail:</label>
                    <input type="email" name="email" id="email" placeholder="E-mail" value="{{ old('email') }}">
                </div>
                <div class="form-element">
                    <label for="username">Username:</label>
                    <input type="text" name="name" id="username" placeholder="Username" value="{{ old('name') }}">
                </div>
                <div class="form-element">
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" placeholder="Password">
                </div>
                <div class="form-element">
                    <label for="password_confirmation">Repeat password:</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat password">
                </div>
                <div class="form-element">
                    <label for="dob">Date of birth:</label>
                    <input type="date" name="dob" id="dob">
                </div>
                <button type="submit" class="btn-primary">Create account ^0^</button>
            </form>
        </div>
    </main>
    <div class="flex justify-center">
        <span class="text-pink-900">Already have an account?</span>
        <a href="/login" class="underline">Log in here! (❁´◡`❁)</a>
    </div>

    @include('partials.error-popup')
</body>

</html>