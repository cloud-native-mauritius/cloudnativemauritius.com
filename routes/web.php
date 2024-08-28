<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PapersController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', EventController::class)->name('home');

Route::get('/blog', BlogController::class)->name('blog');

Route::group(['prefix' => 'call-for-papers'], function () {
    Route::get('/', [PapersController::class, 'show'])->name('call-for-papers');
    Route::post('/', [PapersController::class, 'store'])->name('call-for-papers.store');
});

Route::get('/p/{post:slug}', [PostController::class, 'show'])->name('post.show');

Route::get('/{page:slug}', [PageController::class, 'show'])->name('page.show');
