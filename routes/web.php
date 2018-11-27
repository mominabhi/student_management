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

Route::get('/','StudentController@index');
Route::get('/add_student','StudentController@create');
Route::post('/insert_student','StudentController@insert');
Route::get('/manage_student','StudentController@stdList');
Route::get('/delete_student/{id}','StudentController@delete_student');
Route::get('/edit_student/{id}','StudentController@edit_student');
Route::post('/update_student','StudentController@update_student');
Route::post('/search_student','StudentController@search_student');