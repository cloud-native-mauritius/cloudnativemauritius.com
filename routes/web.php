<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/', EventController::class)->name('home');

Route::get('/blog', BlogController::class)->name('blog');

Route::get('/p/{post:slug}', [PostController::class, 'show'])->name('post.show');

Route::get('/{page:slug}', [PageController::class, 'show'])->name('page.show');
