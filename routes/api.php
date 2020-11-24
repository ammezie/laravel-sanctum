<?php

use Illuminate\Support\Facades\Route;

Route::post('/register', 'AuthController@register');
Route::post('/login', 'AuthController@login');
Route::get('/me', 'AuthController@me')->middleware('auth:sanctum');
