<?php

use App\Http\Controllers\CitizenController;
use App\Http\Controllers\RideController;
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

Route::prefix('/api/v1')->group(function () {
    Route::prefix('/citizens')->group(function () {
        Route::get('/', [CitizenController::class, 'get']);
        Route::put('/reset-budget', [CitizenController::class, 'resetBudget']);
    });

    Route::prefix('/rides')->group(function() {
        Route::get('/', [RideController::class, 'get']);
        Route::post('/', [RideController::class, 'create']);
    });
});
