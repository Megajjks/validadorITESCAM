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
    return view('welcome');
});

Route::get('/estudiante', function () {
    return view('estudiante.dashboard');
});

Route::get('/quest', function () {
    return view('preguntas.quest');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('dasboard-estudiante','dasboard_estudiante');