<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Client;

Route::redirect('/', '/login');

Route::prefix('login')->group(function(){
    Route::get('/', [Auth::class, 'index'])->name('index');
    Route::post('/', [Auth::class, 'login'])->name('login');
});

Route::prefix('dashboard')->group(function () {
    Route::get('/', [Dashboard::class, 'index'])->name('dashboard');
})->middleware('auth');

Route::prefix('client')->group(function () {
    Route::get('/', [Client::class, 'index'])->name('client');
})->middleware('auth');
