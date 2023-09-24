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
})->name('home');

Route::get('/about-us', function () {
    return view('pages.about-us');
})->name('about-us');

Route::group(['prefix'=>'product'], function () {
    Route::get('/native', function () {
        return view('pages.product-native');
    })->name('native');
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

Route::get('/privacy-policy', function () {
    return view('pages.privacy-policy');
});

Route::get('/refund-policy', function () {
    return view('pages.refund-policy');
});

Route::group(['prefix'=>'recruitment'], function () {
    Route::get('/', function () {
        return view('pages.recruitment');
    })->name('recruitment');

    Route::get('/{id}', function () {
        return view('pages.recruitment-detail');
    })->name('recruitment detail');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

