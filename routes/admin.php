<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Auth\AuthController;
use App\Http\Controllers\Backend\BulkActionController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\NewsController;

Route::name('admin.')->group(function () {
    Route::middleware(\App\Http\Middleware\AdminAuthenticate::class)->group(function () {

        Route::post('handle-bulk-action', [BulkActionController::class, 'handleBulkAction']);

        Route::get('/', [DashboardController::class, 'getRevenueChart'])->name('dashboard');
        Route::get('logout', [AuthController::class, 'logout'])->name('logout');

        Route::prefix('categories')->name('categories.')->group(function () {
            Route::get('/', [CategoryController::class, 'index'])->name('index');
            Route::get('save/{id?}', [CategoryController::class, 'save'])->name('save');
            Route::post('/', [CategoryController::class, 'store'])->name('store');
            Route::put('{id}', [CategoryController::class, 'update'])->name('update');
        });

        Route::prefix('news')->name('news.')->group(function () {
            Route::get('', [NewsController::class, 'index'])->name('index');
            Route::get('create', [NewsController::class, 'create'])->name('create');
            Route::post('/', [NewsController::class, 'store'])->name('store');
            Route::get('{id}', [NewsController::class, 'edit'])->name('edit');
            Route::put('{id}', [NewsController::class, 'update'])->name('update');

            // SEO 
            Route::post('{id}/seo-analysis', [NewsController::class, 'getSeoAnalysis'])->name('seo.analysis');
            Route::post('seo-analysis-live', [NewsController::class, 'getSeoAnalysisLive'])->name('seo.analysis.live');

        });
    });

    Route::middleware(\App\Http\Middleware\AdminRedirectIfAuthenticated::class)->group(function () {
        Route::get('login', [AuthController::class, 'login'])->name('login');
        Route::post('login', [AuthController::class, 'authenticate']);
    });
});


