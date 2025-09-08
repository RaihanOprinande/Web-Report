<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjekController;
use App\Http\Controllers\ProjekTaskController;
use App\Http\Controllers\DokumentasiController;

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');


Route::prefix('admin')->group(function () {
    Route::resource('projek', ProjekController::class);
    Route::resource('projek_task', ProjekTaskController::class);
    Route::resource('dokumentasi', DokumentasiController::class);
    Route::resource('anggota', UserController::class);

});

Route::get('/login',[LoginController::class,'index'])->name('login');


Route::post('/login',[LoginController::class,'authenticate']);
Route::post('/logout',[LoginController::class,'logout']);


