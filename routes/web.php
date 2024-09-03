<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('/auth.loginform');
});


Route::view('/home', 'home');
Route::view('/reserve', 'reserve');
Route::view('/docs', 'docs');
Route::view('/legal', 'legal');
Route::view('/visit', 'visit');