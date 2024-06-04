<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);
Route::post('/submit', [HomeController::class, 'submit'])->name('home.submit');
 