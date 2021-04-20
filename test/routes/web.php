<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\statusController;
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
    return view('welcome');
});

Route::middleware(['checkauth'])->group(function () {
    Route::get('siswa', [homeController::class, 'index'])->name('siswa');
});

Route::prefix('auth')->group(function () {
    Route::get('login/staff', [AuthController::class, 'loginStaff'])->name('auth.loginStaff');
    Route::post('login/staff', [AuthController::class, 'loginStaffRequest'])->name('auth.loginStaffRequest');

    Route::get('login', [AuthController::class, 'login'])->name('auth.login');
    Route::post('login', [AuthController::class, 'loginRequest'])->name('auth.loginRequest');

    Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');
});

Route::get('status', [statusController::class, 'index'])->name('status');
