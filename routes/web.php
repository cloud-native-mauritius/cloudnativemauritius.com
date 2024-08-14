<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    $events = App\Models\Event::orderBy('start_date', 'desc')->get();
    return view('index', compact('events'));
});

Route::get('/{slug}', [PageController::class, 'show'])->where('slug', '.*');
