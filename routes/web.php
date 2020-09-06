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
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/donneur', function () {
    // get data from a database
   
    return view('donneurOrdre/index');
  });
  Route::get('/create', function () {
    // get data from a database
   
    return view('donneurOrdre/create');
  });
  Route::get('/show', function () {
    // get data from a database
   
    return view('show');
  });
  Route::get('/edit', function () {
    // get data from a database
   
    return view('executeur/edit');
  });

Route::get('/donneur/ticket', 'donnateurController@index');
Route::get('/donneur/ticket/create', 'donnateurController@create');
Route::post('/donneur/ticket', 'donnateurController@store');
Route::get('/donneur/ticket/{id}', 'donnateurController@show');
Route::get('/file/download/{id}', 'DocumentsController@download');

Route::get('/executeur/ticket', 'executeurController@index');
Route::get('/executeur/ticket/edit/{id}', 'executeurController@edit');
Route::post('/executeur/ticket/update/{id}', 'executeurController@update');
Route::get('/executeur/ticket/{id}', 'executeurController@show');


