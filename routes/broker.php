<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\dashboard\AgentController;


Route::get('home/brokers', [HomeController::class, 'brokers'])->name('brokers');
Route::get('home/brokers/{user}', [HomeController::class, 'brokerDetails'])->name('brokers.details');


Route::middleware('auth', 'is_broker','is_completed_account')->group(function () {
    Route::get('home/agents', [HomeController::class, 'agents'])->name('agents');
    Route::get('home/agents/{agent}', [HomeController::class, 'agentDetails'])->name('agents.details');
    Route::get('plans/{plan}/subscribe', [PlanController::class, 'subscribe'])->name('plans.subscribe');
    Route::resource('dashboard/agents', AgentController::class);
});

