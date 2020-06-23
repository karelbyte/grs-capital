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

function parseDefaultLanguage($http_accept, $deflang = "en") {

    if (isset($http_accept) && strlen($http_accept) > 1)  {

        // dividir los posibles idiomas en un array
        $x = explode(",",$http_accept);

        foreach ($x as $val) {

            // compruebe el valor q y cree un array asociativa. Si no existe el valor q, es por defecto 1
            if (preg_match("/(.*);q=([0-1]{0,1}.\d{0,4})/i",$val,$matches)) {

                $lang[$matches[1]] = (float)$matches[2];
            }
            else {

                $lang[$val] = 1.0;
            }
        }

        // retornamos el idioma por defecto el cual es el valor q más alto
        $qval = 0.0;

        foreach ($lang as $key => $value) {

            if ($value > $qval) {

                $qval = (float)$value;
                $deflang = $key;
            }
        }
    }

    return strtolower($deflang);
}

Route::get('/p', function () {
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
switch ($lang){
    case "es":
        echo "PAGE ES";
        break;
    case "en":
        echo "PAGE EN";
        break;
    default:
        break;
}
});


Route::get('lang/{lang}', 'LanguageController@swap')->name('lang.swap');
