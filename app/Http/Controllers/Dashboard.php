<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class Dashboard extends Controller
{
    public function index(Request $request){
        return Inertia::render('Dashboard/Index');
    }
}
