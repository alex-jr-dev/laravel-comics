<?php

use Hamcrest\Type\IsNumeric;
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
    $datiComics = config("comics");
    $datiView = ["moviesList" => $datiComics];
    return view('welcome', $datiView);
});

Route::get('/comic/{index}', function ($index) {
    $datiComics = config("comics");
    if (!is_numeric($index) || $index < 0 || $index > count($datiComics) - 1) {
        abort(404, 'Comic non esistente');
    }
    $comicChoosed = $datiComics[$index];
    return view('/partials/comic', ['comic' => $comicChoosed]);
})->name('comic');
