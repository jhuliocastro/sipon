<?php

namespace App\Http\Controllers;

use DebugBar\DebugBar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;
use App\Models\AuthModel;
use Illuminate\Support\Facades\Auth as AuthUser;

class Auth extends Controller
{
    protected $model;

    public function __construct(AuthModel $model)
    {
        $this->model = $model;
    }

    public function index(): \Inertia\Response
    {
        return Inertia::render('Auth/Login', []);
    }

    public function login(Request $request): \Illuminate\Http\RedirectResponse
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if(AuthUser::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        }

        return redirect()->back()->with('notification', [
            'status' => false,
            'message' => 'Usuário ou senha incorretos'
        ]);
    }
}
