<?php

use App\Http\Controllers\DbController;
use Illuminate\Support\Facades\Route;

Route::prefix('db')->group(function () {
    Route::get('/index', [DbController::class, 'index']);
    Route::get('/page', [DbController::class, 'page']);
    Route::get('/redis', [DbController::class, 'redis']);
});
