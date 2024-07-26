<?php

use App\Http\Controllers\BerandaController;
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

Route::resource('/', BerandaController::class);

Route::get('/detail-course', function () {
    return view('simplefied.DetailCourse');
});

Route::get('/payment-course', function () {
    return view('simplefied.PaymentCourse');
});
