<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\PenggunaController;
use App\Http\Controllers\API\FishController;
use App\Http\Controllers\API\TransactionController;
use App\Http\Controllers\API\CheckoutController;


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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('fish', [FishController::class, 'all']);
Route::get('transactions/{id}', [TransactionController::class, 'get']);
Route::post('checkout', [CheckoutController::class, 'checkout']);

// Pengguna
Route::get('users', [PenggunaController::class, 'get']);
Route::post('users', [PenggunaController::class, 'post']);
