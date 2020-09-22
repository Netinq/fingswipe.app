<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::resource('score', \App\Http\Controllers\ScoreController::class);
