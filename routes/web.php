<?php

use Illuminate\Support\Facades\Route;

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


/*===================================================================================================================
Begin:: Frontend
*===================================================================================================================*/
Route::get('/', 'App\Http\Controllers\Frontend\PagesController@index')->name('frontend.index');
Route::get('/view/{id}', 'App\Http\Controllers\Frontend\PagesController@view')->name('frontend.view');
Route::post('/user-register', 'App\Http\Controllers\Frontend\PagesController@register')->name('frontend.register');
/*===================================================================================================================
End:: Frontend
*===================================================================================================================*/

/*===================================================================================================================
Begin:: Backend
*===================================================================================================================*/
Route::get('/bookings', 'App\Http\Controllers\Backend\PagesController@index')->name('backend.index');
Route::get('/view-booked/{id}', 'App\Http\Controllers\Backend\PagesController@view')->name('backend.view');
Route::post('/bookings/post-booking', 'App\Http\Controllers\Backend\PagesController@postBooking')->name('backend.post-booking');
Route::post('/bookings/cancel-booking/{id}', 'App\Http\Controllers\Backend\PagesController@cancelBooking')->name('backend.cancel-booking');
/*===================================================================================================================
End:: Backend
*===================================================================================================================*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
