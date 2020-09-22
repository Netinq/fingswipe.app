<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/score/getAll', [\App\Http\Controllers\ScoreController::class, 'getAll']);
Route::resource('score', \App\Http\Controllers\ScoreController::class);
