<?php

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
    return view('pages.home');
});

Route::get('/about-us', function () {
    return view('pages.about-us');
});

Route::get('/go-learning', function () {
    return view('pages.go-learning');
});

Route::get('/payment-method', function () {
    return view('pages.payment-method');
});

Route::get('/terms-of-use', function () {
    return view('pages.terms-of-use');
});