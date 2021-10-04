<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('account-data/{id}', "Api\\AccountController@index");
Route::post('account-login', "Api\\AccountController@login");
Route::post('account-add-credit', "Api\\AccountController@addCredit");
Route::post('account-remove-credit', "Api\\AccountController@removeCredit");
