<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\TasksController;
use App\Models\User;
use Illuminate\Support\Facades\Route;


// Authenticaton

Route::prefix('auth')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login.form');
    Route::post('/login', [AuthController::class, 'authentication'])->name('login');
    Route::get('/register', [AuthController::class, 'create'])->name('register.form');
    Route::post('/register', [AuthController::class, 'register'])->name('register');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});


// Projects
Route::prefix('projects')->name('projects')->controller(ProjectsController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/details/{id}', 'details')->name('details');
    Route::get('/delete/{id}', 'delete')->name('delete');
});

// Tasks
Route::prefix('tasks')->name('tasks')->controller(TasksController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/show', 'details')->name('details');
});

// Dashboard
Route::prefix('dashboard')->name('dashboard')->controller(DashboardController::class)->group(function() {
    Route::get('/', 'index')->name('index');
});
