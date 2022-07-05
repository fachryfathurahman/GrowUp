<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index']);

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    // Route::get('/child_edit/{id}', 'App\Http\Controllers\ChildController@edit');
    // Route::put('/child_edit/update/{id}', 'App\Http\Controllers\ChildController@update');


    // Route::get('/immunization', 'App\Http\Controllers\TypeOfImmunizationController@index', 'App\Http\Controllers\ImmunizationController@index');
    // Route::get('/immunization2', 'App\Http\Controllers\ImmunizationController@index');

    // Route::post('immunization/store', 'App\Http\Controllers\ImmunizationController@store');

    route::resource('home', 'HomeController');
    route::resource('child', 'ChildController');
    route::resource('immunization', 'ImmunizationController');
    route::resource('type_of_immunization', 'TypeOfImmunizationController');
    // Route::post('/home/add', 'App\Http\Controllers\ChildController@add');
    // Route::get('/home', 'App\Http\Controllers\HomeController@index');
});

Route::get('/registration', 'App\Http\Controllers\ParentController@registration');
Route::post('/registration/add', 'App\Http\Controllers\ParentController@add');
route::get('/prevention', 'App\Http\Controllers\SocializationController@prevention');
route::get('/cause', 'App\Http\Controllers\SocializationController@cause');