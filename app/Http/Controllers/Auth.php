<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class Auth extends Controller
{
    public function index(){
        return Inertia::render('Auth/Login', []);
    }
}
