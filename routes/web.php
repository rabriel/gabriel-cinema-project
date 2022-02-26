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

/*===================================================================================================================
End:: Frontend
*===================================================================================================================*/

/*Route::get('/', function () {
    return view('welcome');
});*/
