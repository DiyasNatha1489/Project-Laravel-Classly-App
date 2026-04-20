<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/login', function () {
    return view('layouts.login');
});

Route::get('/attendance', function () {
    return view('attendance');
});

Route::get('/schedule', function () {
    return view('schedule');
});

Route::get('/event', function () {
    return view('event');
});

Route::get('/insight', function () {
    return view('insight');
});