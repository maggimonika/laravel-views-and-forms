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

Route::get('/', function () {
    return view('welcome');
    
});

Route::get('/about', function () {
    return view('about' , [
    'bookdetails'=> App\Models\Bookdetail::take(3)->latest()->get()
    ]);
});

Route::get('/bookdetails','App\Http\Controllers\BookdetailsController@index')->name('bookdetails.index');
Route::post('/bookdetails','App\Http\Controllers\BookdetailsController@store');
Route::get('/bookdetails/create','App\Http\Controllers\BookdetailsController@create');
Route::get('/bookdetails/{bookdetail}','App\Http\Controllers\BookdetailsController@show')->name('bookdetails.show');
Route::get('/bookdetails/{bookdetail}/edit','App\Http\Controllers\BookdetailsController@edit');
Route::put('/bookdetails/{bookdetail}','App\Http\Controllers\BookdetailsController@update');


