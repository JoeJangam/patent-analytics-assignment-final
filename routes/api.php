<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SummaryController;
use App\Http\Controllers\QueryController;
use App\Http\Controllers\CorrelationController;


Route::get('/summary', [SummaryController::class, 'index']);
Route::get('/query', [QueryController::class, 'filter']);
Route::get('/correlation', [CorrelationController::class, 'analyze']);

