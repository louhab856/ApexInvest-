<?php

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


use App\Http\Controllers\AuthController;
use App\Http\Controllers\InvestmentController;
use App\Http\Controllers\ReferralController;

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('investment-packages', [InvestmentController::class, 'index']);
    Route::post('invest', [InvestmentController::class, 'invest']);
    Route::get('referral-dashboard', [ReferralController::class, 'dashboard']);
});


Route::get('/', function () {
    return view('welcome');
});
