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


// Routes with view
Route::get('/', 'HomeController@index', function () {
    return view('news');
});

Route::get('/forme',function() {
	return view('forme');
})->name('forme');

Route::get('/blog',function() {
	return view('blog');
})->name('blog');



//Routes With Controllers

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/posts', 'PostsController@index');

Route::get('/posts/{id}', 'PostsController@show');

Route::get('/news/{id}', 'NewsController@show');