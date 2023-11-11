<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\dashboard\AgentController;


Route::get('home/brokers', [HomeController::class, 'brokers'])->name('brokers');
Route::get('home/brokers/{user}', [HomeController::class, 'brokerDetails'])->name('brokers.details');

Route::middleware('auth', 'is_broker')->group(function () {
    Route::get('plans/{plan}/subscribe', [PlanController::class, 'subscribe'])->name('plans.subscribe');
    Route::resource('dashboard/agents', AgentController::class);
});

