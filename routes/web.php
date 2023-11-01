<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\Account\SettingsController;

// Authentication routes
Route::get('/', function () {
    return view('home');
})->name('home');

Route::prefix('login')->group(function () {
    Route::get('/', [LoginController::class, 'loginForm'])->name('loginForm');
    Route::post('/', [LoginController::class, 'login'])->name('login');
});
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::prefix('register')->group(function () {
    Route::get('/', [RegisterController::class, 'registerForm'])->name('registerForm');
    Route::post('/', [RegisterController::class, 'register'])->name('register');
});


// Dashboard routes
Route::middleware(['auth'])->prefix('/dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
//     // Account settings routes
    Route::prefix('account/settings')->name('account.settings.')->group(function () {
        Route::get('edit', [SettingsController::class, 'edit'])->name('edit');
        Route::put('update-profile', [SettingsController::class, 'updateProfile'])->name('update-profile');
//         Route::put('change-password', [SettingsController::class, 'changePassword'])->name('change-password');
    });


//     // Property routes
//     Route::resource('/properties', PropertiesController::class)->except(['create', 'edit']);

//     Route::prefix('ads')->group(function () {

//         // Temporary Ads routes
//         Route::resource('/ads/temporary', TempAdsController::class)->except(['create', 'edit']);

//         // Featured Ads routes
//         Route::resource('/ads/featured', FeaturedAdsController::class)->except(['create', 'edit']);

//         // Applications routes
//         Route::resource('/ads/applications', ApplicationsController::class)->except(['create', 'edit']);
//     });
});
