<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $events = App\Models\Event::all();
    return view('index', compact('events'));
});
