<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiDataController;

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
Route::delete('ApiData/{id}',[ApiDataCOntroller::class,'deleteData']);
