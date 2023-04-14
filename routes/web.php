<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\indexController;
use App\Http\Controllers\authController;
use App\Http\Controllers\userController;

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

Route::get('/', [indexController::class, 'index'])->name('index');

// route for users
Route::get('/login', [authController::class, 'login'])->name('login');
Route::post('/login/post', [authController::class, 'loginPost'])->name('login.post');
Route::get('/register', [authController::class, 'register'])->name('register');
Route::post('/register/post', [authController::class, 'registerPost'])->name('register.post');
Route::group(['prefix' => 'user',  'middleware' => 'auth:user'], function() {
    Route::get('/', [userController::class, 'index'])->name('user.index');
    Route::get('/logout', [userController::class, 'logout'])->name('user.logout');
});