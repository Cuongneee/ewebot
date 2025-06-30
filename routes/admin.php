<?php


use App\Http\Controllers\Backend\AboutUsController;
use App\Http\Controllers\Backend\ConfigController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\ReviewController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Auth\AuthController;
use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Backend\BulkActionController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\CustomerController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\EmailController;
use App\Http\Controllers\Backend\EmployeController;
use App\Http\Controllers\Backend\NewsController;
use App\Http\Controllers\Backend\ServiceController;
use UniSharp\LaravelFilemanager\Lfm;

Route::name('admin.')->middleware('auth:admin')->group(function () {

    Route::post('handle-bulk-action', [BulkActionController::class, 'handleBulkAction']);

    Route::get('/', [DashboardController::class, 'getRevenueChart'])->name('dashboard');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

    Route::prefix('services')->name('services.')->group(function () {
        Route::get('', [ServiceController::class, 'index'])->name('index');
        Route::get('create', [ServiceController::class, 'create'])->name('create');
        Route::post('/', [ServiceController::class, 'store'])->name('store');
        Route::get('{id}', [ServiceController::class, 'edit'])->name('edit');
        Route::put('{id}', [ServiceController::class, 'update'])->name('update');

    });

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

    Route::prefix('configs')->name('config.')->group(function () {
        Route::get('/', [ConfigController::class, 'index'])->name('index');
        Route::post('update', [ConfigController::class, 'store'])->name('update');
        Route::get('seo', [ConfigController::class, 'seo'])->name('seo');
        Route::post('seo', [ConfigController::class, 'storeSeo'])->name('store');
        Route::get('slider', [ConfigController::class, 'slider'])->name('slider');
        Route::post('slider', [ConfigController::class, 'sliderUpdate'])->name('slider.update');
    });

    Route::resource('reviews', ReviewController::class);
    Route::resource('aboutus', AboutUsController::class);
    Route::resource('contacts', ContactController::class);
    Route::resource('banners', BannerController::class);
    Route::resource('customers', CustomerController::class);
    Route::resource('employes', EmployeController::class);

    Route::post('update-mail-env', [EmailController::class, 'updateMailEnv'])->name('update-mail-env');


});

Route::middleware('guest')->group(function () {
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'authenticate']);
});

Route::group([
    'prefix' => 'laravel-filemanager',
    'middleware' => ['web', 'auth:admin'],
], function () {
    Lfm::routes();
});

