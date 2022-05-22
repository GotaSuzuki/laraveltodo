<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodosController;

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


Route::get('/', 'App\Http\Controllers\TodosController@index');
Route::post('/', 'App\Http\Controllers\TodosController@create');
Route::get('/detail/{id}', 'App\Http\Controllers\TodosController@detail')->name('detail');
Route::get('/delete/{id}', 'App\Http\Controllers\TodosController@delete');
Route::post('/delete/{id}', 'App\Http\Controllers\TodosController@remove');
Route::get('/edit/{id}', 'App\Http\Controllers\TodosController@edit');
Route::post('/edit/{id}', 'App\Http\Controllers\TodosController@update');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
