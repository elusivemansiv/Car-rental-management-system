<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\car_service_renter_controller;

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

Route::get('/', function () {
    return view('home');
});

Route::get('login',[CustomAuthController::class,'login']);
Route::get('registration',[CustomAuthController::class,'registration']);
Route::post('register-user',[CustomAuthController::class,'registerUser'])->name('register-user');
Route::post('login-user',[CustomAuthController::class,'loginUser'])->name('login-user');
Route::get('dashboard_admin',[CustomAuthController::class,'dashboard_admin']);
Route::get('dashboard_renter',[CustomAuthController::class,'dashboard_renter']);
Route::get('dashboard_customer',[CustomAuthController::class,'dashboard_customer']);
Route::get('logout',[CustomAuthController::class,'logout']);
Route::get('addNewCar',[car_service_renter_controller::class,'addNewCar']);
Route::get('messageRenter',[car_service_renter_controller::class,'messageRenter']);
Route::get('postCarVideo',[car_service_renter_controller::class,'postCarVideo']);