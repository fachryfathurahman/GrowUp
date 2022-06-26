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
    return view('home');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    // ini kalok mau pake auth dulu untuk akses ke halamannya
});

Route::get('/home','App\Http\Controllers\HomeController@index');
Route::get('/registration','App\Http\Controllers\ParentController@registration');
Route::post('/registration/add','App\Http\Controllers\ParentController@add');
Route::post('/home/add','App\Http\Controllers\ChildController@add');
