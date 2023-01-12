<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Client;
use App\Http\Controllers\Employees;

Route::redirect('/', '/login');

Route::prefix('login')->group(function(){
    Route::get('/', [Auth::class, 'index'])->name('index');
    Route::post('/', [Auth::class, 'login'])->name('login');
});

Route::middleware(['auth'])->group(function () {
    Route::prefix('dashboard')->group(function () {
        Route::get('/', [Dashboard::class, 'index'])->name('dashboard');
    });

    Route::prefix('client')->group(function () {
        Route::get('/', [Client::class, 'index'])->name('client');
    });

    Route::prefix('employees')->group(function(){
        Route::get('/', [Employees::class, 'index'])->name('employees.index');
        Route::post('/store', [Employees::class, 'store'])->name('employees.store');
    });
});
