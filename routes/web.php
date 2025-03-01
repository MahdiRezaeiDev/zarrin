<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Website Routes
Route::get('/', function () {
    return view('website.welcome');
})->name('home');

Route::get('/about', function () {
    return view('website.about');
})->name('about');

Route::get('/services', function () {
    return view('website.services');
})->name('services');

Route::get('/contact', function () {
    return view('website.contact');
})->name('contact');


// Admin Routes
Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->prefix('admin')->group(function () {
    // User Routes
    Route::resource('users', UserController::class);

    // Profile Routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
