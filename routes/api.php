<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TransactionStatusController;
use App\Http\Controllers\TripStatusController;
use App\Http\Controllers\VehicleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::middleware(['auth:sanctum'])->group(function () {
    Route::resource('vehicle', VehicleController::class);
    Route::resource('role', RoleController::class);
    Route::resource('transaction-status', TransactionStatusController::class);
    Route::resource('trip-status', TripStatusController::class);
    Route::post('logout', [AuthController::class, 'logout']);
});
