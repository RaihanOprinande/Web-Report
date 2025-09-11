<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjekController;
use App\Http\Controllers\ProjekKategoriController;
use App\Http\Controllers\ProjekTaskController;
use App\Http\Controllers\DokumentasiController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\MediaPartnerController;

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');


Route::prefix('admin')->group(function () {
    Route::resource('projek', ProjekController::class);
    Route::resource('projek_kategori', ProjekKategoriController::class);
    Route::resource('projek_task', ProjekTaskController::class);
    Route::resource('dokumentasi', DokumentasiController::class);
    Route::resource('anggota', UserController::class);
    Route::resource('kontak', KontakController::class);
    Route::resource('media_partner', MediaPartnerController::class);
});

Route::get('/home',[LandingController::class,'home'])->name('home');
Route::get('/tentang',[LandingController::class,'tentang'])->name('tentang');
Route::get('/projek',[LandingController::class,'projek'])->name('projek');
Route::get('/detail-projek',[LandingController::class,'detailProjek'])->name('detailProjek');
Route::get('/kontak',[LandingController::class,'kontak'])->name('kontak');

Route::get('/login',[LoginController::class,'index'])->name('login');


Route::post('/login',[LoginController::class,'authenticate']);
Route::post('/logout',[LoginController::class,'logout']);


