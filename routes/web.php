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
$this->get('/', ['as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm']);
$this->post('login', ['as' => 'login.attempt', 'uses' => 'Auth\LoginController@login']);
$this->post('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);

Route::group(['prefix' => 'dashboard'], function () {
    Route::get('/', ['as' => 'dashboard.index', 'uses' => 'DashboardController@index']);
});

Route::group(['prefix' => 'spents'], function () {
    Route::get('/', ['as' => 'spent.index', 'uses' => 'SpentController@index']);
    Route::get('/create', ['as' => 'spent.create', 'uses' => 'SpentController@create']);
    Route::post('/store', ['as' => 'spent.store', 'uses' => 'SpentController@store']);
    Route::get('/edit/{id}', ['as' => 'spent.edit', 'uses' => 'SpentController@edit']);
    Route::put('/update/{id}', ['as' => 'spent.update', 'uses' => 'SpentController@update']);
    Route::delete('/destroy/{id}', ['as' => 'spent.destroy', 'uses' => 'SpentController@destroy']);
});