<?php

use App\Http\Controllers\Api\CityController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/cities', [CityController::class, 'store']);
Route::delete('/cities/{city}', [CityController::class, 'destroy']);
