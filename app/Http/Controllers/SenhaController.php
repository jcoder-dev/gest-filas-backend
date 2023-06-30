<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SenhaController extends Controller
{
    public function index()
    {
        return view('usuarios.senhas.dashboard');
    }

}
