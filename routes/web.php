<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::withoutSession()->group(function () {
    Route::get('/', EventController::class)->name('home');

    Route::get('/blog', BlogController::class)->name('blog');

    Route::get('/p/{post:slug}', [PostController::class, 'show'])->name('post.show');

    Route::get('/{page:slug}', [PageController::class, 'show'])->name('page.show');
});
