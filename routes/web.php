<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

// Route for dashbaord
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('petugas', PetugasController::class);
Route::resource('buku', BukuController::class);
Route::resource('anggota', AnggotaController::class)->parameters ([
    'anggota' => 'anggota'
]);
