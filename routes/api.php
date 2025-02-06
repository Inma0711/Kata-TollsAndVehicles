<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\VehicleController;
use App\Http\Controllers\Api\StationController;


Route::get('/vehicles', [VehicleController::class, 'index'])->name('apiVehicleHome');
Route::get('/vehicles/{id}', [VehicleController::class, 'show'])->name('apiVehicleShow');
Route::post('/vehicles', [VehicleController::class, 'store'])->name('apiStoreVehicle');
Route::put('/vehicles/{id}', [VehicleController::class, 'update'])->name('apiUpdateVehicle');
Route::delete('/vehicles/{id}', [VehicleController::class, 'destroy'])->name('apiDestroyVehicle');

Route::get('/stations' , [StationController::class, 'index'])->name('apiVehicleHome');
Route::get('/stations/{id}', [StationController::class, 'show'])->name('apiStationShow'); 
Route::post('/stations', [StationController::class, 'store'])->name('apiStoreStation');  
Route::put('/stations/{id}', [StationController::class, 'update'])->name('apiUpdateStation');  
Route::delete('/stations/{id}', [StationController::class, 'destroy'])->name('apiDestroyStation');