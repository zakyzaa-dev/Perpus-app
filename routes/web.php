<?php

use App\Http\Controllers\PetugasController;
use Illuminate\Support\Facades\Route;

Route::resource('petugas', PetugasController::class);
