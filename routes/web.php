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
Route::get('/', 'PageControl@index');

Auth::routes();
Route::get('/dashboard', 'DashboardControl@index')->name('dashboard');

Route::get('/dashboard/book', 'BookControl@index');
Route::post('/dashboard/create', 'BookControl@create');
Route::get('/dashboard/edit{id}', 'DashboardControl@bookedit');
Route::patch('/dashboard/edit{id}', 'BookControl@edit');
Route::delete('/dashboard/del{id}', 'BookControl@destroy');
Route::get('/dashboard/exportbook', 'BookControl@export');
Route::post('/dashboard/importbook', 'BookControl@import');

Route::get('/dashboard/member', 'MemberControl@index');
Route::get('/dashboard/member{id}', 'MemberControl@edit');
Route::post('/dashboard/addmember', 'MemberControl@register');
Route::delete('/dashboard/mbrdel{id}', 'MemberControl@destroy');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
