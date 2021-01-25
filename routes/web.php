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

Route::get('/', 'HomeController@index');
Route::get('/contact', 'HomeController@contact');
Route::get('/reserve', 'ReservationController@create')->middleware('auth');
Route::get('/mytickets','ReservationController@getUserTickets')->middleware('auth');
Route::get('/reservations/browse', 'ReservationController@index')->middleware('auth');
Route::post('/bookings/add', 'ReservationController@store')->middleware('auth');
Route::get('/booking/edit/{id}', 'ReservationController@edit')->middleware('auth');
Route::post('/booking/update/{id}', 'ReservationController@update')->middleware('auth');
Route::delete('/booking/delete/{id}', 'ReservationController@destroy')->middleware('auth');
Route::post('/sendmail', 'HomeController@sendmail');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard')->middleware('auth');
