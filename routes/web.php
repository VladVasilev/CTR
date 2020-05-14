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
});

Route::get('/AMD', function () {
    return view('AMD');
});

Route::get('/Intel', function () {
    return view('Intel');
});

Route::get('/Intelm', function () {
    return view('Intelm');
});

Route::get('/AMDm', function () {
    return view('AMDm');
});

Route::get('/AMDG', function () {
    return view('AMDG');
});

Route::get('/Nvidia', function () {
    return view('Nvidia');
});

Route::get('/o', function () {
    return view('o');
});

Route::get('/w', function () {
    return view('w');
});

Route::get('/Patriot', function () {
    return view('Patriot');
});

Route::get('/Gskill', function () {
    return view('Gskill');
});

Route::get('/500+', function () {
    return view('500+');
});

Route::get('/500', function () {
    return view('500');
});

Route::get('/com', function () {
    return view('com');
});

Route::get('/help', function () {
    return view('help');
});