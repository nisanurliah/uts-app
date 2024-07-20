<?php

use App\Http\Controllers\PenjualanBarangController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PenjualanBarangController::class, 'index']);
Route::get('/create', [PenjualanBarangController::class, 'create']);
Route::post('/store', [PenjualanBarangController::class, 'store']);
