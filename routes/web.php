<?php

use App\Http\Controllers\AdController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Properties\PropertiesController;
use App\Http\Controllers\Properties\Ads\TempAdsController;
use App\Http\Controllers\Properties\ApplicationsController;
use App\Http\Controllers\Dashboard\Account\SettingsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlanController;

Route::get('/', [HomeController::class, 'home'])->name('home');

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
Route::middleware(['auth'])->prefix('/dashboard')->name('dashboard.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('home');
    //     // Account settings routes
    Route::prefix('account/settings')->name('account.settings.')->group(function () {
        Route::get('edit', [SettingsController::class, 'edit'])->name('edit');
        Route::put('update-profile', [SettingsController::class, 'updateProfile'])->name('update-profile');
        Route::get('security', [SettingsController::class, 'security'])->name('security');
        Route::put('change-password', [SettingsController::class, 'changePassword'])->name('change-password');
    });
    Route::resource('properties', PropertiesController::class);
    Route::resource('ads', AdController::class);


    Route::resource('applications', ApplicationsController::class);

});
Route::middleware('auth','is_subscriber')->group(function () {
    Route::get('plans', [PlanController::class, 'index'])->name('plans');
    Route::get('plans/{plan}/subscribe', [PlanController::class, 'subscribe'])->name('plans.subscribe');
});
