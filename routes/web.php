<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CFPController;
use App\Http\Controllers\ContributionController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::withoutSession()->group(function () {
    Route::get('/', EventController::class)->name('home');

    Route::get('/cfp', [CFPController::class, 'create'])->name('cfps.create');
    Route::post('/cfps', [CFPController::class, 'store'])->name('cfps.store');
    Route::get('/completed', function () {
        return view('completed');
    })->name('cfps.completed');

    Route::get('/blog', BlogController::class)->name('blog');

    Route::permanentRedirect('/cncf', 'https://ocgroups.dev/cncf/group/58jha3y')->name('cncf');

    Route::get('/contributions', [ContributionController::class, 'show'])->name('contributions');

    Route::get('/p/{post:slug}', [PostController::class, 'show'])->name('post.show');

    Route::get('/{page:slug}', [PageController::class, 'show'])->name('page.show');

    Route::get('/api/meetups', [EventController::class, 'all'])->name('api.meetups');
});
