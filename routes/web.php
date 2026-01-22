<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\ErrorpageController;
use App\Http\Controllers\Frontend\LoginController;
use App\Http\Controllers\Frontend\OurteamController;
use App\Http\Controllers\Frontend\PricingController;
use App\Http\Controllers\Frontend\RegisterController;
use App\Http\Controllers\Frontend\ServicesController;

/*
|--------------------------------------------------------------------------
| Public Routes (NO LOGIN REQUIRED)
|--------------------------------------------------------------------------
*/

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

/*
|--------------------------------------------------------------------------
| Protected Routes (LOGIN REQUIRED)
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->group(function () {

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('/', [HomeController::class, 'index']);
    Route::get('/about', [AboutController::class, 'index']);
    Route::get('/service', [ServicesController::class, 'index']);
    Route::get('/contact', [ContactController::class, 'index']);

    // ✅ ONLY NEW LINE ADDED (Contact form submit)
    Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

    Route::get('/blog', [BlogController::class, 'index']);
    Route::get('/team', [OurteamController::class, 'index']);
    Route::get('/pricing', [PricingController::class, 'index']);
    Route::get('/404', [ErrorpageController::class, 'index']);

    Route::get('/dashboard', function () {
        return view('frontend.dashboard');
    })->name('dashboard');
});
