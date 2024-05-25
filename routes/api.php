<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;


Route::get('/get_cars', [CarController::class, 'index']);
Route::get('/filter_by_models/{model}/{employee_id}', [CarController::class, 'filterByModel']);
Route::get('/filter_by_comfort_categories/{category}/{employee_id}', [CarController::class, 'filterByComfortCategory']);
