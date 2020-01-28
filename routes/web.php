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

Route::get('/projects', 'ProjectController@index');


Route::get('/', 'HomeController@index');

/*Route::prefix('tasks')->middleware('auth')->group(function(){
    Route::get('/', 'TaskController@index');

    Route::get('/create', 'TaskController@create');

    Route::post('/', 'TaskController@store');

    Route::get('/{task}', 'TaskController@show');

    Route::get('/{task}/edit', 'TaskController@edit');

    Route::put('/{task}', 'TaskController@update');

    Route::delete('/{task}', 'TaskController@destroy');
});*/

Route::get('/contact', 'ContactController@contact');

Route::get('/about', 'AboutController@about');

Route::get('/contact', 'PagesController@contact');

Route::resource('tasks', 'TaskController')->middleware('auth');//위의 그룹으로 묶은 것도 더 편하게 바꿈

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
