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
Route::get('/home', 'ControllerHome@page');
Route::get('/calendario', 'ControllerEvents@page');
Route::get('/formacao', 'ControllerFormation@page');
Route::get('/trajetoria', 'ControllerTrajectory@page');
