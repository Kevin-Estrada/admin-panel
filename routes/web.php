<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Dashboards Route
Route::get('/', [DashboardController::class, 'index']);

//Products
Route::resource('/products', ProductController::class);