<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    $events = App\Models\Event::orderBy('start_date', 'desc')->get();
    return view('index', compact('events'));
});

Route::get('/p/{slug}', [PostController::class, 'show'])->where('slug', '.*');
Route::get('/{slug}', [PageController::class, 'show'])->where('slug', '.*');
