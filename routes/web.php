<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
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

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/about', function () {
    return view('pages.about');
});


Route::get('/privacy-policy', function () {
    return view('pages.privacy-policy');
});

Route::get('/legal', function () {
    return view('pages.legal');
});

Route::get('/terms', function () {
    return view('pages.terms');
});

Route::get('/fund', function () {
    return view('pages.fund');
});

Route::get('/fund-features-1', function () {
    $tap = 'features';
    return view('pages.fund-features', compact('tap'));
})->name('features');

Route::get('/fund-admin', function () {
    $tap = 'admin';
    return view('pages.fund-features-tap-2', compact('tap'));
})->name('admin');

Route::get('/fund-results', function () {
    $tap = 'results';
    return view('pages.fund-features-tap-3', compact('tap'));
})->name('results');

Route::get('lang/{lang}', 'LanguageController@swap')->name('lang.swap');
