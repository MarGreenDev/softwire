<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\profileController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

Route::view('/', 'welcome');

Route::view('/login', 'login');

Route::view('/register', 'register');

Route::post('/register', [AuthController::class, 'register']);

Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/profile/{user}', function (User $user) {

    return view('profile.show', [
        'user' => $user,
    ]);
})->name('profile.show');

Route::get('/', function () {

    $featuredUser = User::find(1);
    $newestUser = User::latest()->first();
    $users = User::all();

    return view('welcome', [
        'featuredUser' => $featuredUser,
        'newestUser' => $newestUser,
        'users' => $users,
    ]);
});

Route::get('/search', function () {

    $featuredUser = User::find(1);
    $newestUser = User::latest()->first();
    $search = request('search');

    $users = User::where('name', 'LIKE', "%{$search}%")->get();

    return view('search', [
        'users' => $users,
        'search' => $search,
        'featuredUser' => $featuredUser,
        'newestUser' => $newestUser,
    ]);
});

Route::put('/profile.about-me', [profileController::class, 'updateAboutMe'])
    ->middleware('auth')
    ->name('profile.show.update');

Route::put('/profile.summary', [profileController::class, 'updateSummary'])
    ->middleware('auth')
    ->name('profile.summary.update');

Route::put('/profile.profile_picture', [profileController::class, 'updatePfp'])
    ->middleware('auth')
    ->name('profile.picture.update');
