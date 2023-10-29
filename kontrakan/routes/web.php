<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;

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

Route::get('/adm/dashboard', [AdminController::class, 'dashboard']);
Route::get('/adm/bill', [AdminController::class, 'bill']);
Route::get('/adm/room', [AdminController::class, 'room']);
Route::get('/', [AdminController::class, 'login']);