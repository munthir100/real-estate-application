<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdController;
use App\Http\Controllers\admin\ApplicationController as AdminApplicationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Properties\PropertiesController;
use App\Http\Controllers\Properties\ApplicationsController;
use App\Http\Controllers\Dashboard\Account\SettingsController;
use App\Http\Controllers\admin\PropertiesController as AdminPropertiesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\dashboard\AgentController;
use App\Models\City;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('properties', [HomeController::class, 'properties'])->name('properties');
Route::get('applications', [HomeController::class, 'applications'])->name('applications');
Route::get('plans', [PlanController::class, 'index'])->name('plans.index');
Route::get('contact', [ContactController::class, 'index'])->name('contact.index');
Route::get('home/agents', [HomeController::class, 'agents'])->name('agents');
Route::get('home/agents/{agent}', [HomeController::class, 'agentDetails'])->name('agents.details');




Route::get('properties/{property}/details', [HomeController::class, 'propertyDetails'])->name('properties.details');
Route::get('city/{cityName}', [HomeController::class, 'cityProperties'])->name('cityProperties');

Route::prefix('login')->group(function () {
    Route::get('/', [LoginController::class, 'loginForm'])->name('loginForm');
    Route::post('/', [LoginController::class, 'login'])->name('login');
});
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/verification-code', [LoginController::class, 'verification'])->name('auth.verification-code');

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


Route::middleware('auth', 'is_admin')->prefix('admin')->name('admin.')->group(function () {
    Route::resource('properties', AdminPropertiesController::class)->only(['index', 'edit', 'destroy']);
    Route::resource('applications', AdminApplicationController::class)->only(['index', 'edit', 'destroy']);
    Route::post('properties/{property}/accept', [AdminPropertiesController::class, 'accept'])->name('properties.accept');
    Route::post('properties/{property}/reject', [AdminPropertiesController::class, 'reject'])->name('properties.reject');
    Route::post('properties/{property}/delete', [AdminPropertiesController::class, 'delete'])->name('properties.delete');
});

Route::view('test', 'test');
