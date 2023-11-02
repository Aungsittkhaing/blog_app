<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PageController;
use App\Http\Middleware\isAuthenticated;
use App\Http\Middleware\isNotAuthenticated;

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

Route::middleware(isAuthenticated::class)->group(function () {
    Route::controller(HomeController::class)->prefix('dashboard')->group(function () {
        Route::get('home', 'home')->name('dashboard.home');
    });
    Route::resource('item', ItemController::class);
    Route::resource('category', CategoryController::class);
});
Route::get('/', [PageController::class, 'home'])->name('home');


Route::controller(AuthController::class)->group(function () {
    Route::middleware(isNotAuthenticated::class)->group(function () {
        Route::get('register', 'register')->name('auth.register');
        Route::post('register', 'store')->name('auth.store');
        Route::get('login', 'login')->name('auth.login');
        Route::post('login', 'check')->name('auth.check');
    });
    Route::post('logout', 'logout')->name('auth.logout')->middleware(isAuthenticated::class);
});
