<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\PlafonKonsumsiController;
use App\Http\Controllers\PotonganKoperasiController;
use App\Http\Controllers\SimpananController;
use App\Http\Controllers\StatusDanaSegarController;
use App\Http\Controllers\TransaksiKonsumsiController;
use App\Http\Controllers\UploadHarianController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('status-dana-segar', StatusDanaSegarController::class);
    Route::resource('potongan-koperasi', PotonganKoperasiController::class);
    Route::resource('plafon-konsumsi', PlafonKonsumsiController::class);
    Route::resource('transaksi-konsumsi', TransaksiKonsumsiController::class);
    Route::resource('barang', BarangController::class);
    Route::resource('simpanan', SimpananController::class);
    Route::resource('upload-harian', UploadHarianController::class);
});
