<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicoController extends Controller
{
    public function index()
    {
        return view('usuarios.telas-gestao.servico');

    }
}
