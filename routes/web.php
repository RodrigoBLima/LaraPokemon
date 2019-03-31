<?php

use LaraDex\Http\Controllers\TrainerController;

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
    return view('welcome');
});

//rota teste para treinar com o controller pruebaController
Route::get('pruba/{name}', 'PruebaController@pruba');



//
Route::resource('trainers', 'TrainerController');

