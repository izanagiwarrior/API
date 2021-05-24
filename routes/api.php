<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\barangController;
use App\Http\Controllers\pegawaiController;
use App\Http\Controllers\customerController;
use App\Http\Controllers\komplainController;
use App\Http\Controllers\transaksiController;
use App\Http\Controllers\pengirimanController;
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

// Transaksi
Route::get('transaksi', [transaksiController::class, 'index']);
Route::post('transaksi/create', [transaksiController::class, 'create']);
Route::put('transaksi/update/{id}', [transaksiController::class, 'update']);
Route::delete('transaksi/delete/{id}', [transaksiController::class, 'delete']);

// Customer
Route::get('customer', [customerController::class, 'index']);
Route::post('customer/create', [customerController::class, 'create']);
Route::put('customer/update/{id}', [customerController::class, 'update']);
Route::delete('customer/delete/{id}', [customerController::class, 'delete']);

// Pegawai
Route::get('pegawai', [pegawaiController::class, 'index']);
Route::post('pegawai/create', [pegawaiController::class, 'create']);
Route::put('pegawai/update/{id}', [pegawaiController::class, 'update']);
Route::post('pegawai/delete/{id}', [pegawaiController::class, 'delete']);

// Barang
Route::get('barang', [barangController::class, 'index']);
Route::post('barang/create', [barangController::class, 'create']);
Route::put('barang/update/{id}', [barangController::class, 'update']);
Route::post('barang/delete/{id}', [barangController::class, 'delete']);

// Komplain
Route::get('komplain', [komplainController::class, 'index']);
Route::post('komplain/create', [komplainController::class, 'create']);
Route::post('komplain/update/{id}', [komplainController::class, 'update']);
Route::post('komplain/delete/{id}', [komplainController::class, 'delete']);

// Pengiriman
Route::get('pengiriman', [pengirimanController::class, 'index']);
Route::post('pengiriman/create', [pengirimanController::class, 'create']);
Route::post('pengiriman/update/{id}', [pengirimanController::class, 'update']);
Route::post('pengiriman/delete/{id}', [pengirimanController::class, 'delete']);
