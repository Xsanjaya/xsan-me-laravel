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

Route::get('/dashboard/member', 'MemberControl@index');
Route::get('/dashboard/member{id}', 'MemberControl@edit');

