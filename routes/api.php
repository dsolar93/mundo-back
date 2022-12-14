<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\StreetController;


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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/state', [StateController::class, 'getState']);
Route::get('/province/{idState}', [ProvinceController::class, 'getProvince']);
Route::get('/city/{idProvince}', [CityController::class, 'getCity']);
Route::get('/street/{idCity}', [StreetController::class, 'getStreet']);