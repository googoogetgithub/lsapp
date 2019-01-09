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




/*
Route::get('/user/{id}/{name}', function ($id, $name) {
    return 'This is user: ' . $id . ' With the name of ' . $name;
});

Route::get('/about', function () {
    return view('pages.about');
});

*/
Route::get('/', 'pagesController@index');
Route::get('/about', 'pagesController@about');
Route::get('/services', 'pagesController@services');


Route::resource('posts', 'PostsController');

/*
Route::get('/', function () {
    return view('welcome');
});
*/