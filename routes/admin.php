<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Auth\AuthController;

use App\Http\Controllers\Backend\DashboardController;


Route::name('admin.')->group(function () {
    Route::middleware(\App\Http\Middleware\AdminAuthenticate::class)->group(function () {


        Route::get('/', [DashboardController::class, 'getRevenueChart'])->name('dashboard');
        Route::get('logout', [AuthController::class, 'logout'])->name('logout');

    });

    Route::middleware(\App\Http\Middleware\AdminRedirectIfAuthenticated::class)->group(function () {
        Route::get('login', [AuthController::class, 'login'])->name('login');
        Route::post('login', [AuthController::class, 'authenticate']);
    });
});


