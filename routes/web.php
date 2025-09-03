<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjekController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function () {
    Route::resource('projek', ProjekController::class);
});
