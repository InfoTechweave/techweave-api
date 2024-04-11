<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/otp', function () {
    return view('otp');
})->name('otp');

Route::get('/home', function () {
    return view('home');
})->name('home');

// Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register',  [AuthController::class, 'register'])->name('register');
// Route::post('/verify-otp', [AuthController::class, 'verifyOTP'] )->name('ot');
