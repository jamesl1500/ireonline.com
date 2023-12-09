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

Route::get('/branding/tric', function () {
    return view('branding.tric');
})->name('branding.tric');

Route::get('/branding/olu', function () {
    return view('branding.olu');
})->name('branding.olu');

Route::get('/branding/tmobile', function () {
    return view('branding.tmobile');
})->name('branding.tmobile');

Route::get('/branding/faipi', function () {
    return view('branding.faipi');
})->name('branding.faipi');

Route::get('/exhibitions', function () {
    return view('exhibitions');
})->name('exhibitions');

Route::get('/illustrations', function () {
    return view('illustrations');
})->name('illustrations');

Route::get('/ux', function () {
    return view('ux');
})->name('ux');

Route::get('/ux/eeg', function () {
    return view('ux.eeg');
})->name('eeg');

Route::get('/ux/cashnest', function () {
    return view('ux.cashnest');
})->name('eeg');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

