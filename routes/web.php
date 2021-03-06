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

Route::get('/', function () {
    return view('welcome');
});

Route::get('tasks', 'App\Http\Controllers\TasksController@index')->name('tasks.index');

Route::get('tasks/create', 'App\Http\Controllers\TasksController@create')->name('tasks.create');

Route::post('tasks/store', 'App\Http\Controllers\TasksController@store')->name('tasks.store');

Route::get('tasks/edit/{id}', 'App\Http\Controllers\TasksController@edit')->name('tasks.edit');

Route::post('tasks/update/{id}', 'App\Http\Controllers\TasksController@update')->name('tasks.update');

Route::get('tasks/show/{id}', 'App\Http\Controllers\TasksController@show')->name('tasks.show');

Route::post('tasks/delete/{id}', 'App\Http\Controllers\TasksController@delete')->name('tasks.delete');
