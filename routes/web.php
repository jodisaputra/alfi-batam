<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\Backend\DashboardController;

Route::get('/', [\App\Http\Controllers\frontend\HomeController::class, 'index']);
Route::get('/login', function () {
    echo 'Login';
})->name('login');

Route::prefix('admin')->group(function () {

    //group login controller
    Route::middleware('guest')->group(function () {
        Route::controller(LoginController::class)->group(function () {
            Route::get('login', 'showLoginForm')->name('admin.login.show');
            Route::post('login', 'loginUser')->name('admin.login.post');
        });
    });
    Route::post('logout', LogoutController::class)
        ->middleware('auth')
        ->name('admin.logout');
    //end group login controller
    Route::middleware('auth')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
    });
});
