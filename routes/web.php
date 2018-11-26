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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/persona', 'PersonaController');
Route::resource('/alumno', 'AlumnoController');
Route::resource('/profesor', 'ProfesorController');
Route::resource('/inicio','InicioController');
Route::resource('/nota','NotasController');
Route::resource('/materia','MateriaController');