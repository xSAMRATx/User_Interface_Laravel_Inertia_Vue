<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CustomerController;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Customers
Route::resource('customers', CustomerController::class);

// Orders
Route::resource('orders', OrderController::class);


require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
