<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsersController;

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

// If the user is not logged in it will go back to login page
Route::middleware(['not_logged_in'])->group(function (){
    Route::view('index', 'index');
    
});

// If the user is already logged in it will go back to index
Route::middleware(['already_logged_in'])->group(function (){
    Route::view('/','login');
    Route::view('login','login');
    Route::view('register','register');
    
});

// Controller Functions
Route::post('save', [RegisterController::class, 'register']);
Route::post('loginverification', [LoginController::class, 'login']);
Route::get('logout', [LoginController::class, 'logout']);