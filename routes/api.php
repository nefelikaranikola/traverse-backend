<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UserController;
use \App\Http\Controllers\AgencyController;
use \App\Http\Controllers\LocationController;
use \App\Http\Controllers\MediaController;
use \App\Http\Controllers\PackageController;
use \App\Http\Controllers\ReservationController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('users', UserController::class);
Route::apiResource('agencies', AgencyController::class);
Route::apiResource('locations', LocationController::class);
Route::apiResource('media', MediaController::class);
Route::apiResource('packages', PackageController::class);
Route::apiResource('reservations', ReservationController::class);
