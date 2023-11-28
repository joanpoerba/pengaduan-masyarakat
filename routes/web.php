<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HandlerController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/', [LoginController::class, 'authenticate']);

Route::get('/register', [RegisterController::class, 'register'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/home', [HomeController::class, 'home']);
Route::post('/home', [HomeController::class, 'tambahAduan']);
Route::get('/success', [HandlerController::class, 'success'])->middleware('guest');

Route::get('/admin', [AdminController::class, 'admin'])->middleware('auth');

Route::post('/logout', [LogoutController::class, 'logout']);