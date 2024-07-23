<?php

use App\Http\Controllers\CamioneroController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('camiones17', CamioneroController::class);
