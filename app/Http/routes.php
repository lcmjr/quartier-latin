<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'ControllerHome@page');
Route::get('/home', 'ControllerHome@page')->name('Home');
Route::get('/quartier-latin', 'ControllerQuartier@page');
Route::get('/formacao', 'ControllerFormation@page');
Route::get('/calendario', 'ControllerEvents@page');
Route::get('/trajetoria', 'ControllerTrajectory@page');
Route::get('/galeria', 'ControllerGallery@page');
Route::get('/galeria-ajax', 'ControllerGallery@ajax_video');
Route::get('/plie', 'ControllerPlie@page');
Route::get('/contato', 'ControllerContact@page');
Route::post('/form-cursos', 'ControllerFormCourses@email');
Route::post('/contato', 'ControllerContact@email');
Route::post('/newsletter', 'ControllerNewsletter@email');
Route::get('/newsletter/{id}', 'ControllerNewsletter@ativar_email');
