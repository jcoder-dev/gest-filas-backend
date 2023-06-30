<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    public function index()
    {
        return view('usuarios.telas-gestao.funcionario');

    }

    public function adicionar()
    {

    }
}
