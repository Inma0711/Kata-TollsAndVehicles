<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StationController;
use App\Http\Controllers\VehicleController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/vehicles', [VehicleController::class, 'index'])->name('vehicleList');
Route::get('/vehicles/{id}', [VehicleController::class, 'show'])->name('vehicleShow');
Route::get('/stations', [StationController::class, 'index'])->name('stationList');
Route::get('/stations/{id}', [StationController::class, 'show'])->name('stationShow');
