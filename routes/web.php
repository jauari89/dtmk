<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing', [
        'landing' => config('dtmk'),
    ]);
})->name('landing');
