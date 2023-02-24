<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\frontend\HomeController::class, 'index']);
