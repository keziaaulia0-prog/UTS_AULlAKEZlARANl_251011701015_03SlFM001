<?php

use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CarController::class, 'beranda'])->name('beranda');
Route::get('/mobil', [CarController::class, 'index'])->name('cars.index');
Route::get('/mobil/{car}', [CarController::class, 'show'])->name('cars.show');
Route::view('/tentang', 'tentang')->name('tentang');
Route::view('/kontak', 'kontak')->name('kontak');
