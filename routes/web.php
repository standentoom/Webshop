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
    $products = [
        'X-treme',
        'X-Race',
        'DRD',
        'Dax',
        'Z50',
        'MTX',
        'Aerox R',
        'Neos 4 50',
        'TZR 50',
        'PRIMAVERA 50 2T',
        'SPRINT 50 4T',
        'GTS SUPER 125 (ABS)',
        'Luxe 25',
        'Roadie 25',
        'Quadro EX 25'

    ];
    $categories = [
        'Derbi',
        'Honda',
        'Yamaha',
        'Vespa',
        'Tomos'
    ];


    return view('welcome', compact('categories', 'products'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/honda', 'HomeController@index')->name('honda');
Route::get('/tomos', 'HomeController@index')->name('tomos');
Route::get('/zundab', 'HomeController@index')->name('zundab');
Route::get('/vespa', 'HomeController@index')->name('vespa');
Route::get('/derbi', 'HomeController@index')->name('derbi');

