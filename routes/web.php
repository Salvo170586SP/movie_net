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


//ADMIN
Route::middleware('auth')->prefix('admin')->name('admin.')->namespace('Admin')->group(function (){
    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('movies', 'MovieController');

});


//UTENTE
Route::get('{any?}', function () {
    return view('guest.home');
})->where('any','.*');













