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

Route::get('/add', 'CarController@index');
Route::post('/add_car', 'CarController@store');
Route::get('/view_cars', 'CarController@show');
Route::get('/view_book/{id}', 'CarController@view');
 Route::post('/view_book/{id}', 'BookingController@store');
 
 Route::post('/view_book', 'BookingController@showbill');
 Route::get('/view_ubooking', 'BookingController@show');

 Route::get('/view_bill/{id}', 'BookingController@showbill');

 Route::get('adminlog','AdminlogController@index');
 Route::post('adminlogin','AdminlogController@login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
