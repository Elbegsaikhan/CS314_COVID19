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

//Route::get('/', function () {
//    return view('teststyle');
//});

Route::get('/', 'App\Http\Controllers\Controller@index');
Route::get('/{country}', 'App\Http\Controllers\CountryController@countryBy');

//Route::post('/', 'App\Http\Controllers\Controller@search_by_region');
//Route::get("country", "App\Http\Controllers\CountryController@index");
//Route::get('/{country}', 'App\Http\Controllers\Controller@countryInfo');
