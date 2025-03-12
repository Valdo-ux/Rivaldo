<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; // Huruf "A" besar pada "App"

Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);
