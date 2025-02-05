<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/vehicles', [VehicleController::class, 'index'])->name('vehicles.home');
Route::get('/vehicles/{id}', [VehicleController::class, 'show'])->name('vehicles.show');
Route::get('/stations', [StationController::class, 'index'])->name('stations.home');
Route::get('/stations/{id}', [StationController::class, 'show'])->name('stations.show');

