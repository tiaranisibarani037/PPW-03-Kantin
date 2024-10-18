<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/adminpage', function () {
    return view('admin');
});

Route::get('/createfood', function () {
    return view('createfood');
})->name('createfood');
