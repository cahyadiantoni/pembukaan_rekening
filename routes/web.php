<?php

use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Protected routes
Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
});



