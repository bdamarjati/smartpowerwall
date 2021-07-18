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

Route::get('/inverter', function(){
    return view('inverter');
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
Route::get('/cost', [App\Http\Controllers\DashboardController::class, 'viewCost'])->name('cost');

// Route::get('/control', [App\Http\Controllers\DashboardController::class, 'viewControl'])->name('control');

Route::get('/bms', [App\Http\Controllers\DashboardController::class, 'viewBms'])->name('bms');

Route::get('/controlb',[App\Http\Controllers\StateCController::class,'control'])->name('controlb');
Route::get('/control',[App\Http\Controllers\StateController::class,'getStatus'])->name('control');

Route::get('/bms-dev',[App\Http\Controllers\BmsController::class,'tempView'])->name('tempView');

Route::get('/settings', [App\Http\Controllers\SettingsController::class, 'index'])->name('settings');
Route::post('/settings', [App\Http\Controllers\SettingsController::class, 'store'])->name('settings');
Route::post('/addLoad', [App\Http\Controllers\StateCController::class, 'addLoad'])->name('addLoad');
