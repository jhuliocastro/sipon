<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth;

Route::redirect('/', '/login');

Route::prefix('login')->group(function(){
    Route::get('/', [Auth::class, 'index']);
    Route::post('/', [Auth::class, 'login'])->name('login');
});
