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

Route::get('/search', function () {
    return view('finder');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/rankings', function () {
    return view('rankings');
});
