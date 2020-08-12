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
Route::group(['prefix' => 'admin'], function () {
    Route::group(['prefix' => 'users'], function () {
        Route::get('', 'UserController@getAll')->name('user.all');
        Route::get('/create', 'UserController@showFormAdd')->name('user.formAdd');
        Route::post('/create','UserController@add')->name('user.add');
        Route::get('/{id}/edit', 'UserController@showFormEdit')->name('user.formEdit');
        Route::post('/{id}/edit', 'UserController@edit')->name('user.edit');
        Route::get('/{id}/delete', 'UserController@delete')->name('user.delete');
    });
});
