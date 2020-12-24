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

Auth::routes();

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/logout', function(){
    Auth::logout();
    return Redirect::to('/');
});

Route::get('/changePassword', [App\Http\Controllers\ChangePasswordController::class, 'showChangePasswordForm'])->name('changePassword');
Route::post('/changePassword', [App\Http\Controllers\ChangePasswordController::class, 'changePassword'])->name('changePassword');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'viewDashboard'])->name('dashboard');

Route::get('/usages', [App\Http\Controllers\DashboardController::class, 'viewUsages'])->name('usages');


// Route::post('/data','DataController@store');
// Route::get('/data', [App\Http\Controllers\DataController::class, 'view'])->name('data');