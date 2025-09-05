<?php

use App\Http\Controllers\ComboPlanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EligibilityCriteriaController;
use App\Http\Controllers\PlanController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('plans', PlanController::class);

Route::resource('combo-plans', ComboPlanController::class);

Route::resource('eligibility-criteria', EligibilityCriteriaController::class)->parameters(['eligibility-criteria' => 'eligibilityCriteria']);