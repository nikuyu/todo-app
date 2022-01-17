<?php

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

Route::get('/', 'App\Http\controllers\TasksController@index' ) ;

Route::get('/tasks', 'App\Http\controllers\TasksController@index' ) ;

Route::get('/tasks/create', 'App\Http\controllers\TasksController@create' ) ;

Route::post('/tasks','App\Http\controllers\TasksController@store' ) ;
    
Route::patch('/tasks/{id}', 'App\Http\controllers\TasksController@update');