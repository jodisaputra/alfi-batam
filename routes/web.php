<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CheckSlugController;
use App\Http\Controllers\Backend\CategoryController;
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
        //forgot password controller
        // Route::get('forgot-password', [ForgotPasswordController::class, 'create'])
        //     ->name('password.request');
        // Route::post('forgot-password', [ForgotPasswordController::class, 'store'])
        //     ->name('password.email');
    });

    Route::post('logout', LogoutController::class)
        ->middleware('auth')
        ->name('admin.logout');
    //end group login controller

    Route::middleware('auth')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('/profile', [ProfileController::class, 'edit'])->name('admin.profile');
        Route::put('/profile', [ProfileController::class, 'update'])->name('admin.profile.update');

        Route::resource('categories', CategoryController::class);
    });
});

//check slug group
Route::get('/check_slug_category', [CheckSlugController::class, 'check_slug_category'])->name('check_slug_category');

//end check slug group
