<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profiles', [ProfileController::class, 'index']);
Route::get('/profiles/{id}', [ProfileController::class, 'show']);