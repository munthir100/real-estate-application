<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\dashboard\AgentController;
use App\Http\Controllers\Properties\PropertiesController;


Route::get('home/subscribers', [HomeController::class, 'subscribers'])->name('subscribers');
Route::get('home/subscribers/{user}', [HomeController::class, 'subscriberDetails'])->name('subscribers.details');

Route::middleware('auth', 'is_subscriber')->group(function () {
    Route::get('plans/{plan}/subscribe', [PlanController::class, 'subscribe'])->name('plans.subscribe');
    Route::resource('dashboard/agents', AgentController::class);
});




Route::middleware(['auth'])->prefix('/dashboard')->name('dashboard.')->group(function () {
    Route::resource('properties', PropertiesController::class);
});
