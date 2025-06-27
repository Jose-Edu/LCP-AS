<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/games/1', function () {
    return view('game');
});

Route::get('/articles/1', function () {
    return view('text');
});

require __DIR__.'/auth.php';
