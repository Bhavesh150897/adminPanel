<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Front\FrontHomeController;

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

Route::get('/', [FrontHomeController::class, 'index'])->name('landingPage');

Auth::routes();

Route::group(['prefix' => 'admin','middleware' => 'auth'], function () {
    
    //dashboardController
    Route::get('dashboard', [AdminHomeController::class, 'index'])->name('dashboard');
    
    //UserController
    Route::resource('users', UserController::class);
    
});
