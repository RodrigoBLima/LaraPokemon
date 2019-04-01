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

//rota para pokemons
//Route::resource('pokemons', 'PokemonController');
Route::post('trainers/{trainer}/pokemons','PokemonController@store');
Route::get('trainers/{trainer}/pokemons','PokemonController@index');


//rota para os treinadores
Route::resource('trainers', 'TrainerController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
