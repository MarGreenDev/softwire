<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuestbookController;
use App\Http\Controllers\profileController;
use App\Models\GuestbookEntry;
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

    $guestbookEntries = GuestbookEntry::where('profile_id', $user->id,)
        ->latest()
        ->paginate(3)
        ->fragment('guestbook');

    return view('profile.show', [
        'user' => $user,
        'guestbookEntries' => $guestbookEntries,
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

    // Profile updates

Route::put('/profile.about-me', [profileController::class, 'updateAboutMe'])
    ->middleware('auth')
    ->name('profile.show.update');

Route::put('/profile.summary', [profileController::class, 'updateSummary'])
    ->middleware('auth')
    ->name('profile.summary.update');

Route::put('/profile.profile_picture', [profileController::class, 'updatePfp'])
    ->middleware('auth')
    ->name('profile.picture.update');

    // guestbook

Route::post('/profile/{user}/guestbook', [GuestbookController::class, 'store'])
    ->middleware('auth')
    ->name('guestbook.store');

    // ADMIN

Route::get('/admin', [DashboardController::class, 'getAllUsers'])
    ->middleware('admin');

Route::get('/profile/admin/{user}', function (User $user) {
    
return view('profile.admin-view', [
    'user' => $user
]);
})->name('profile.admin');