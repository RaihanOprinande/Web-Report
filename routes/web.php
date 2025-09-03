<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjekController;

Route::get('/', function () {
    return view('login');
});


Route::prefix('admin')->group(function () {
    Route::resource('projek', ProjekController::class);
});
Route::get('/welcome', function () {
    return view('welcome');
}) ->middleware('auth');

Route::get('/login',[LoginController::class,'index'])->name('login');


Route::post('/login',[LoginController::class,'authenticate']);
Route::post('/logout',[LoginController::class,'logout']);

