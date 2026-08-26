<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;

//Public Routes (Tidak menggunakan token)
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

//Protected Routes (Wajib membawa bearer token dari sanctum)
