<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/rooms', function () {
    return view('rooms');
});

Route::get('/story', function () {
    return view('story');
});

Route::get('/rental', function () {
    return view('rental');
});

Route::get('/contact', function () {
    return view('contact');
});
