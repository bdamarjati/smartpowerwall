<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiDataController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\StateCController;
use App\Http\Controllers\InverterController;
use App\Http\Controllers\BmsController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('dashboard','DashboardController@index')->name('dashboard');
Route::get('ApiData',[ApiDataController::class,'getAllData']);
Route::get('ApiData/{id}',[ApiDataController::class,'getData']);
Route::post('ApiData',[ApiDataController::class,'addData']);
Route::put('ApiData/{id}',[ApiDataController::class,'updateData']);
Route::delete('ApiData/{id}',[ApiDataController::class,'deleteData']);

Route::get('ChunkData',[ApiDataController::class,'graphData']);
Route::get('ChunkData/{kwh}',[ApiDataController::class,'graphData']);

Route::get('StateC',[StateCController::class,'getStatus']);
Route::post('StateC',[StateCController::class,'postValue']);

Route::get('State',[StateController::class,'getStatus']);
Route::post('State',[StateController::class,'postValue']);

Route::get('InverterData',[InverterController::class,'getAllData']);
Route::get('InverterData/{mode}',[InverterController::class,'getData']);
Route::post('InverterData',[InverterController::class,'addData']);
Route::delete('InverterData/{id}',[InverterController::class,'deleteData']);

Route::get('BmsData',[BmsController::class,'getAllData']);
Route::post('BmsData',[BmsController::class,'addData']);
