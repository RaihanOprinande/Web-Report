<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjekController;
use App\Http\Controllers\ProjekTaskController;
use App\Http\Controllers\DokumentasiController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function () {
    Route::resource('projek', ProjekController::class);
    Route::resource('projek_task', ProjekTaskController::class);
    Route::resource('dokumentasi', DokumentasiController::class); 
});


