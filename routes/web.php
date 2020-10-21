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
Route::get('Miprimerlayout', function () {
    return view('Mi primer layout');
});
Route::get('Victor', function () {
    return view('Layouts.Victor');
});
Route::get('helloworld', 'Controller@index')->name('holamundodos');
//Routes Materias
Route::resource('/helloworld', 'Materias\controllerMaterias');
//Array con JSON
Route::get('/miprimerarray', 'Materias\controllerMaterias@getAlumnos')->name('alumnos');
//configurar prefix
Route::group(['prefix'=>'api'], function(){
    Route::apiResource('materias', 'MateriasController');
   Route::apiResource('alumno', 'controllerAlumno@store');
});