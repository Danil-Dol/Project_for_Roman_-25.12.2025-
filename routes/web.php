<?php

use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');

Route::get('/orders/create', function () {
    return view('order.create');
})->name('orders.create');

Route::delete('/orders/{order}', [OrderController::class, 'destroy'])->name('orders.destroy');

Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');