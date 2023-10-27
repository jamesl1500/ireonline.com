<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/apparel', function () {
    return view('apparel');
})->name('apparel');

Route::get('/branding', function () {
    return view('branding');
})->name('branding');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

