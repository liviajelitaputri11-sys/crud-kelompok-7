<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\kendaraanController;

Route::get('/', function () {
    return view('welcome');
});
 Route::resource('kendaraan', 
 KendaraanController::class);