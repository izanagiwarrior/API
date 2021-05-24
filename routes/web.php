<?php

use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\barangController;
use App\Http\Controllers\pegawaiController;
use App\Http\Controllers\customerController;
use App\Http\Controllers\komplainController;
use App\Http\Controllers\transaksiController;
use App\Http\Controllers\pengirimanController;
use App\Models\Customer;

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

Route::get('/', function () {
    return view('welcome');
});

// Transaksi
Route::get('transaksi', [transaksiController::class, 'index2'])->name('transaksi');
Route::get('transaksi/create', [transaksiController::class, 'create_view']);
Route::post('transaksi/create', [transaksiController::class, 'create_process'])->name('transaksi.create');
Route::get('transaksi/update/{id}', [transaksiController::class, 'update_view'])->name('transaksi.update');
Route::post('transaksi/update/{id}', [transaksiController::class, 'update_process'])->name('transaksi.process');
Route::post('/delete-transaksi', [transaksiController::class, 'deleteTransaksi'])->name('transaksi.delete');

// Customer
Route::get('customer', [customerController::class, 'index2'])->name('customer');
Route::get('customer/create', [customerController::class, 'create_view']);
Route::post('customer/create', [customerController::class, 'create_process'])->name('customer.create');
Route::get('customer/update/{id}', [customerController::class, 'update_view'])->name('customer.update');
Route::post('customer/update/{id}', [customerController::class, 'update_process'])->name('customer.process');
Route::post('/delete-customer', [customerController::class, 'deleteCustomer'])->name('customer.delete');

// Pegawai
Route::get('pegawai', [pegawaiController::class, 'index2'])->name('pegawai');
Route::get('pegawai/create', [pegawaiController::class, 'create_view']);
Route::post('pegawai/create', [pegawaiController::class, 'create_process'])->name('pegawai.create');
Route::get('pegawai/update/{id}', [pegawaiController::class, 'update_view'])->name('pegawai.update');
Route::post('pegawai/update/{id}', [pegawaiController::class, 'update_process'])->name('pegawai.process');
Route::post('/delete-pegawai', [pegawaiController::class, 'deletePegawai'])->name('pegawai.delete');

// Barang
Route::get('barang', [barangController::class, 'index2'])->name('barang');
Route::get('barang/create', [barangController::class, 'create_view']);
Route::post('barang/create', [barangController::class, 'create_process'])->name('barang.create');
Route::get('barang/update/{id}', [barangController::class, 'update_view'])->name('barang.update');
Route::post('barang/update/{id}', [barangController::class, 'update_process'])->name('barang.process');
Route::post('/delete-barang', [barangController::class, 'deleteBarang'])->name('barang.delete');

// Komplain
Route::get('komplain', [komplainController::class, 'index2'])->name('komplain');
Route::get('komplain/create', [komplainController::class, 'create_view']);
Route::post('komplain/create', [komplainController::class, 'create_process'])->name('komplain.create');
Route::get('komplain/update/{id}', [komplainController::class, 'update_view'])->name('komplain.update');
Route::post('komplain/update/{id}', [komplainController::class, 'update_process'])->name('komplain.process');
Route::post('/delete-komplain', [komplainController::class, 'deleteKomplain'])->name('komplain.delete');

// Pengiriman
Route::get('pengiriman', [pengirimanController::class, 'index2'])->name('pengiriman');
Route::get('pengiriman/create', [pengirimanController::class, 'create_view']);
Route::post('pengiriman/create', [pengirimanController::class, 'create_process'])->name('pengiriman.create');
Route::get('pengiriman/update/{id}', [pengirimanController::class, 'update_view'])->name('pengiriman.update');
Route::post('pengiriman/update/{id}', [pengirimanController::class, 'update_process'])->name('pengiriman.process');
Route::post('/delete-pengiriman', [pengirimanController::class, 'deletePengiriman'])->name('pengiriman.delete');
