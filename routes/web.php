<?php

use App\Http\Controllers\ChildController;
use App\Http\Controllers\ChildImunController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImmunizationController;
use App\Http\Controllers\TypeOfImmunizationController;
use Illuminate\Support\Facades\Auth;
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

Route::group(['middleware' => 'auth'], function () {
    // Route::get('/child_edit/{id}', 'App\Http\Controllers\ChildController@edit');
    // Route::put('/child_edit/update/{id}', 'App\Http\Controllers\ChildController@update');


    // Route::get('/immunization', 'App\Http\Controllers\TypeOfImmunizationController@index', 'App\Http\Controllers\ImmunizationController@index');
    // Route::get('/immunization2', 'App\Http\Controllers\ImmunizationController@index');

    // Route::post('immunization/store', 'App\Http\Controllers\ImmunizationController@store');
    Route::get('/', [HomeController::class, 'index']);
    route::resource('home', HomeController::class);
    route::resource('child', ChildController::class);
    // route::resource('immunization', ImmunizationController::class);
    route::resource('type_of_immunization', TypeOfImmunizationController::class);
    // Route::post('/home/add', 'App\Http\Controllers\ChildController@add');
    // Route::get('/home', 'App\Http\Controllers\HomeController@index');

    Route::get('/registration', 'App\Http\Controllers\ParentController@registration');
    Route::post('/registration/add', 'App\Http\Controllers\ParentController@add');
    Route::get('/registration', 'App\Http\Controllers\ParentController@registration');

    Route::post('/child/add', 'App\Http\Controllers\ChildController@add');
    Route::get('/child/edit/{id}', 'App\Http\Controllers\ChildController@edit');
    Route::put('/child/update/{id}', 'App\Http\Controllers\ChildController@update');

    Route::get(
        '/child/growth/{child_id}',
        'App\Http\Controllers\GrowthController@update'
    );
    Route::put('/child/growth/store/{child_id}', 'App\Http\Controllers\GrowthController@store');


    route::get('/prevention', 'App\Http\Controllers\SocializationController@prevention');
    route::get(
        '/cause',
        'App\Http\Controllers\SocializationController@cause'
    );
    route::get('/definition', 'App\Http\Controllers\SocializationController@definition');
    route::get('/impact', 'App\Http\Controllers\SocializationController@impact');


    Route::get('/immunization/{id}', [ImmunizationController::class, 'index']);
    Route::get('/immunization/create/{id}', [ChildImunController::class, 'create']);
    Route::post('/immunization/create/store', [ChildImunController::class, 'store']);

    Route::get('/immunization/child/{id}', [ChildImunController::class, 'index']);
});
