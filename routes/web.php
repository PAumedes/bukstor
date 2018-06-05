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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Authors

Route::get('/authors', 'AuthorController@index');
Route::get('/categories', 'CategoryController@index');
Route::get('/books', 'BookController@index');
Route::get('/books/add', 'BookController@create');
Route::post('/addBook', 'BookController@store');


// Route::resource('/ejemplos', 'ExamplesController');