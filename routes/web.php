<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LocationController;

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

Route::get('/', function () {
    return view('login');
})->name('login');

Route::get('/logout', [LoginController::class, 'logout'] )->name('logout');

Route::post('/login', [LoginController::class, 'login'])->name('login_user');

Route::middleware(['auth', 'auth.session'])->group(function () {

    Route::get('/dashboard', [LocationController::class, 'index']);
    Route::post('/addlocation', [LocationController::class, 'addlocation'])->name('addlocation');
    Route::get('/viewmap', [LocationController::class, 'viewmap']);
    Route::get('/editmap', [LocationController::class, 'edit']);
    Route::post('/edit', [LocationController::class, 'editmap'])->name('editmap');


 });
