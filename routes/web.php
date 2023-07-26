<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\usersController;

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

Route::get('/signup', [usersController::class , 'index']);
Route::post('/signup', [usersController::class , 'store']);

Route::get('/login', [usersController::class , 'loginPost'])->name('login');
Route::post('/login', [usersController::class , 'loginPost']);

// Route::get('/signup/dashboard', [usersController::class , 'success']);


