<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['user_auth'])->group(function (){
    route::view('index', 'index');
});

Route::view('/','login');
Route::view('login','login');
Route::view('register','register');

Route::post('save', [RegisterController::class, 'register']);
Route::post('loginverification', [LoginController::class, 'login']);
Route::get('logout', [LoginController::class, 'logout']);