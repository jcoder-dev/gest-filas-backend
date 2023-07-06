<?php

namespace App\Http\Controllers;

use App\Http\Requests\SenhaRequest;
use App\Models\Servico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SenhaController extends Controller
{
    public function index()
    {
        return view('usuarios.senhas.dashboard');
    }

    public function selecionarServico(Request $request)
    {

        $estudante = DB::select('select * from estudantes where nmero_processo = ?', [$request->idEstudante]);

        if($estudante)
        {

            $servicos = Servico::all();

            return view('usuarios.senhas.tela-tipo-servico', compact('servicos'));
        }



    }

    public function gerarSenha(Request $requestSenha)
    {
        if($requestSenha)
        {

        }
    }

}
