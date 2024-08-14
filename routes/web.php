<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    $events = App\Models\Event::all();
    return view('index', compact('events'));
});

Route::get('/{slug}', [PageController::class, 'show'])->where('slug', '.*');
