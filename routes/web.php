<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CricketController;

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

Route::get('/addcash', function () {
    return view('addcash');
})->name('addcash');

Route::get('/card', function () {
    return view('card');
})->name('card');
Route::post('/register',  [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');
// Route::get('/fetch-matches', [CricketController::class, 'getFeaturedMatches'])->name('getFeaturedMatches');
Route::get('/home', [CricketController::class, 'getFeaturedMatches'])->name('home');
// Route::get('/home', [CricketController::class, 'getMatch'])->name('home');

