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
Route::get('menus', 'MenuController@index');
Route::get('activities', 'ActivityController@index');
Route::get('organizations', 'OrganiztaionController@index');
Route::get('locations', 'LocationController@index');
Route::middleware('auth:api')->get('/user', static function (Request $request) {
    return $request->user();
});
