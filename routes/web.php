<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\DashboardController;

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

Route::view('/login', 'login');
Route::post('login',[Users::class,'login']);
Route::get('/',[DashboardController::class,'index']);
Route::get('/logout',[Users::class,'logout']);
Route::get('detail/{id}',[DashboardController::class,'getDetail']);
