<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class, 'home']);
Route::get('/download-app', [\App\Http\Controllers\HomeController::class, 'download']);
