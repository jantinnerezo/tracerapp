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

Route::get('/', 'PagesController@index');

Route::get('/about', 'PagesController@about');

Route::resource('students', 'StudentsController');

Route::get('/profile.index');


Route::get('/show_all', 'PagesController@tabled_show');
Route::get('/add_student', 'PagesController@add_student_page');

Route::post('/update', 'StudentsController@update');
