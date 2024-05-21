<?php

use App\Http\Controllers\CityController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CityController::class, 'index']);
Route::get('/{city:slug}', [CityController::class, 'show']);
Route::get('/{city:slug}/news', [CityController::class, 'news'])->name('news');
Route::get('/{city:slug}/about', [CityController::class, 'about'])->name('about');