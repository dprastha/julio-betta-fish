<?php

use App\Http\Controllers\DashboardController;
use App\Models\Transaction;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. NoPw create something great!
|
*/

Route::get('/', [DashboardController::class, 'index'])
   ->name('dashboard');

Auth::routes();

Route::resource('fish', App\Http\Controllers\FishController::class);
Route::resource('transaction', App\Http\Controllers\TransactionController::class);
Route::get('transaction/{id}/set-status', [App\Http\Controllers\TransactionController::class, 'setStatus'])
   ->name('transaction.status');
