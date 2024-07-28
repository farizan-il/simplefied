<?php

use App\Http\Controllers\AutentifikasiController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\SimplefiedController;
use App\Http\Controllers\VerifikasiController;
use App\Http\Controllers\PaymentController;
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

Route::resource('/', SimplefiedController::class);
Route::resource('/simplefied', SimplefiedController::class);

Route::resource('/payment-course', PaymentController::class);

Route::resource('/login', AutentifikasiController::class);
Route::resource('/register', RegistrasiController::class);
Route::resource('/verifikasi', VerifikasiController::class);