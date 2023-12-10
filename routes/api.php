<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\MejaController;

Route::apiResource('/category', CategoryController::class);
Route::apiResource('/jenis', JenisController::class);
Route::apiResource('/menu', MenuController::class);
Route::apiResource('/stok', StokController::class);
Route::apiResource('/pelanggan', PelangganController::class);
Route::apiResource('/transaksi', TransaksiController::class);
Route::apiResource('/pemesanan', PemesananController::class);
Route::apiResource('/meja', MejaController::class);
