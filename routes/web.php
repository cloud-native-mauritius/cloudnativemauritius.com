<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CFPSubmissionController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', EventController::class)->name('home');

Route::get('/blog', BlogController::class)->name('blog');

Route::get('/cfp', [CFPSubmissionController::class, 'show'])->name('Call For Papers');

Route::post('/cfp', [CFPSubmissionController::class, 'create'])->name('Call For Papers');

Route::get('/p/{post:slug}', [PostController::class, 'show'])->name('post.show');

Route::get('/{page:slug}', [PageController::class, 'show'])->name('page.show');
