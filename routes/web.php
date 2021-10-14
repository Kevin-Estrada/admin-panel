<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

// Dashboards Route
Route::get('/admin', [DashboardController::class, 'index']);

//Products
Route::resource('/admin/products', ProductController::class);

//Orders
Route::resource('/admin/orders', OrderController::class);
