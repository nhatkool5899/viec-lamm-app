<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\PagesController;
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

Route::get('/', [PagesController::class, 'index']);
Route::get('/thong-tin-ca-nhan', [PagesController::class, 'profile']);

Route::post('/dang-nhap', [AccountController::class, 'login']);
Route::get('/login', [AccountController::class, 'login']);
