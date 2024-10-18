<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\homeController;
use Illuminate\Routing\Route as RoutingRoute;
use App\Http\Controllers\signupController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/adminpage', function () {
    return view('admin');
});

Route::get('/createfood', function () {
    return view('createfood');
})->name('createfood');

Route::get('/login', function(){
    return view('loginPage');
});
Route::get('/signup', function(){
    return view('signup');
});
Route::get('/signup', [signupController::class, 'index']); 
Route::post('/signup', [signupController::class, 'store']);

Route::post('postlogin', 'App\Http\Controllers\LoginController@postlogin')->name('postlogin');
Route::get('logout', 'App\Http\Controllers\LoginController@logout')->name('logout');

Route::get('/home', [homeController::class, 'index']);

