<?php

use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\EmailController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\NewsController;
use App\Http\Controllers\Frontend\ServiceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'about'])->name('about');
Route::get('/services', [ServiceController::class, 'services'])->name('services');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');

Route::post('/send-contact', [EmailController::class, 'sendContactMail'])->name('contact.send');

Route::get('/blog-new/category/{slug}', [NewsController::class, 'listNewsByCategory'])->name('listNewsByCategory');
Route::get('/blog-new', [NewsController::class, 'listNews'])->name('listNews');
Route::get('/blog-new/{slug}', [NewsController::class, 'detailNews'])->name('detailNews');
Route::get('/search}', [NewsController::class, 'search'])->name('search');
