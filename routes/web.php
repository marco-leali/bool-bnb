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


Auth::routes();

Route::middleware('auth')
->namespace('Admin')
->prefix('admin')
->name('admin.')
->group(function (){
    Route::get('/apartments/{id}/messages', 'ApartmentController@showMessages')->name('apartments.show-messages');
Route::get('/', 'HomeController@index');
Route::resource('/apartments', 'ApartmentController');
});


Route::get('{any?}', function () {
    return view('guest.home');
})->name('guest.home')->where('any','.*');