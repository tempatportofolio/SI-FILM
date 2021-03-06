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
    return view('auths.login');
});

Route::get('/loginadmin', 'AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');


Route::group(['middleware' => 'auth'], function(){
    Route::get('/dashboard', 'DashboardController@index');
    Route::get('/film', 'FilmController@index');
    Route::get('/film/{id}/detail', "FilmController@show");
    Route::post('/film/create','FilmController@create');
    Route::get('/film/{id}/edit', 'FilmController@edit')->name('film.edit');
    Route::post('/film/{id}/update', 'FilmController@update');
    Route::get('/film/{id}/destroy', 'FilmController@destroy');
    route::get('/film/export_excel', 'FilmController@export_excel');
    Route::get('/film/cetak_pdf', 'FilmController@cetak_pdf');

    Route::get('/transaction', 'TransController@index');
    Route::get('/transaction/{id}/detail', "TransController@show");
    Route::post('/transaction/create','TransController@create');
    Route::get('/transaction/{id}/edit', 'TransController@edit');
    Route::post('/transaction/{id}/update', 'TransController@update');
    Route::get('/transaction/{id}/destroy', 'TransController@destroy');
    route::get('/transaction/export_excel', 'TransController@export_excel');
    Route::get('/transaction/cetak_pdf', 'TransController@cetak_pdf');
    Route::get('/transaction/{id}/kirimemail','TransController@email');

    Route::get('getdatafilm',[
        'uses' => 'FilmController@getdatafilm',
        'as' => 'ajax.get.data.film',
    ]);
});



    