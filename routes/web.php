<?php

use App\Http\Controllers\ThankYou;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/user/{name}',[UserController::class,'getUsers']);
Route::get('/admin',[UserController::class,'getUsersAdmin']);

Route::get('userlist',[UserController::class,'getUsersList']);

Route::post('/thankyou',[ThankYou::class,'getForm']);