<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Web\CustomOrderController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CustomOrderController::class, 'index'])->name('home');
Route::post('order-store', [CustomOrderController::class, 'store'])->name('order.store');


Route::controller(AuthController::class)->group(function () {
    Route::get('login', 'index')->name('login');
    Route::post('login', 'login')->name('login.store');
});


Route::middleware("auth")->group(function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('orders', 'orders')->name('orders');
        Route::get('order/{id}', 'orderView')->name('order');
        Route::post('change-status/{id}', 'changeStatus')->name('order.status');
    });
    Route::controller(AuthController::class)->group(function () {
        Route::get('auth', 'getAuthInfo')->name('auth.info');
        Route::post('update-auth-info', "updateAuthInfo")->name('update.auth.info');
        Route::any('logout', "logout")->name('logout');
    });
});
