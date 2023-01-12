<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class Employees extends Controller
{
    protected $model;

    public function __construct()
    {

    }

    public function index(){
        return Inertia::render('Manage/Employees', []);
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'cpf' => 'required',
            'rg' => 'required',
            'dateAdmission' => 'required',
            'team' => 'required',
            'office' => 'required',
            'shift' => 'required',
            'login' => 'required',
            'password' => 'required',
            'confirmPassword' => 'required',
            'email' => 'required',
            'permission' => 'required'
        ]);

        $data = [
            'name' => $request->input('name'),
            'cpf' => $request->input('cpf'),
            'login' => $request->input('login'),
            'password' => $request->input('password'),
            'confirmPassword' => $request->input('confirmPassword')
        ];

        if($data["password"] !== $data["confirmPassword"]){
            return redirect()->back()->with([
                'status' => false,
                'info' => 'Senha não confere'
            ]);
        }
    }
}
