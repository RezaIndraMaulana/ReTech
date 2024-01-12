<?php

use App\Http\Controllers\API\FiturUtamaController;
use App\Http\Controllers\API\SesiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

//Login dan Register
Route::post('customer_register', [SesiController::class, 'customer_register']);
Route::post('customer_login', [SesiController::class, 'customer_login']);

//Get Teknisi Berdasarkan Service
Route::get('/teknisi/by-service/{service}', [FiturUtamaController::class, 'getTeknisiByService']);
