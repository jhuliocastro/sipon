<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class Client extends Controller
{
    public function index(){
        return view('client');
    }
}
