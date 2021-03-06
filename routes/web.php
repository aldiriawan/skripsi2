<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TripController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ArmadaController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\CheckerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CodriverController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| WILDCARD SELALU DI BAWAH
|
*/

Route::get('/', function () {
    return view('dashboard.index', [
        "title" => "Dashboard"
    ]);
})->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// Route::get('/admin', [AdminController::class, 'index'])->name('admin')->middleware('auth');

Route::resource('/admin/driver', DriverController::class)->middleware('auth');
Route::resource('/admin/codriver', CodriverController::class)->middleware('auth');
Route::resource('/admin/armada', ArmadaController::class)->middleware('auth');

Route::resource('/admin', TripController::class)->middleware('auth');
Route::resource('/checker', CheckerController::class)->middleware('auth');
