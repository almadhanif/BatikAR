<?php

use App\Http\Controllers\AuthController;
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

Route::get('/', function () {
    return view('dashboard');
});


// Auth Route
Route::prefix('auth')->group(function() {
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::get('register', [AuthController::class, 'register'])->name('register');
    Route::post('login', [AuthController::class, 'loginAction'])->name('login.action');
    Route::post('register', [AuthController::class, 'registerAction'])->name('register.action');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});

Route::get('/product', function() {
    return view('Product.detail');
})->name('product');