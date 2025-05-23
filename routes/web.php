<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\LokasiController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/brands', [BrandController::class, 'index'])->name('brands.index');
Route::get('/brands/create', [BrandController::class, 'create'])->name('brands.create');
Route::post('/brands', [BrandController::class, 'store'])->name('brands.store');
Route::get('/brands/{id}/edit', [BrandController::class, 'edit'])->name('brands.edit');
Route::delete('/brands/{id}', [BrandController::class, 'destroy'])->name('brands.destroy');
Route::put('/brands/{id}', [BrandController::class, 'update'])->name('brands.update');

Route::get('/lokasi', [LokasiController::class, 'index'])->name('lokasi.index');
Route::get('/lokasi/create', [LokasiController::class, 'create'])->name('lokasi.create');
Route::post('/lokasi', [LokasiController::class, 'store'])->name('lokasi.store');
Route::get('/lokasi/{id}/edit', [LokasiController::class, 'edit'])->name('lokasi.edit');
Route::delete('/lokasi/{id}', [LokasiController::class, 'destroy'])->name('lokasi.destroy');
Route::put('/lokasi/{id}', [LokasiController::class, 'update'])->name('lokasi.update');