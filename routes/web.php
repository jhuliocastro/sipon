<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth;

Route::redirect('/', '/login');

Route::get('/login', [Auth::class, 'index']);
