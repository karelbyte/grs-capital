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


Route::get('/email-test', function () {
   dd(app()->getLocale());
});

Route::post('/email-to-client', 'AppController@emailToClient');

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

Route::get('/investment-fund', function () {
    return view('pages.fund');
});

Route::get('lang/{lang}', 'LanguageController@swap')->name('lang.swap');


Route::get('/limpiar_cache', function () {

    Artisan::call('view:clear');

    Artisan::call('route:clear');

    Artisan::call('cache:clear');

    Artisan::call('config:clear');

    Artisan::call('config:cache');

    return 'CACHE DEL SISTEMA LIMPIADA CON EXITO';

});

Route::get('/artisan', function () {

    Artisan::call('migrate:fresh --seed');

    return 'DB MIGRADA CON EXITO';
});


Auth::routes();

Route::get('/admin', 'AdminController@index')->name('admin');
