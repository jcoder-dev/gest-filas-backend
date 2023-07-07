<?php

namespace App\Http\Controllers;

use App\Http\Requests\SenhaRequest;
use App\Models\Senha;
use App\Models\Servico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SenhaController extends Controller
{
    public function index()
    {
        $senhas = DB::select('select * from senhas where DAYOFMONTH(data_criacao) = DAYOFMONTH(NOW()) order by created_at');
       // dd($senhas[1]);

        return view('usuarios.telas-gestao.dashboard', compact('senhas'));
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

    public function tirarSenha($idServico)
    {
       // dd($idServico);
        $servico = Servico::find($idServico);


        $codigoServico =  DB::select("SELECT id FROM servicos where codigo LIKE :codigo", ['codigo' => $servico->codigo]);

        $proximaSenha = DB::select("SELECT COUNT(*) as total FROM senhas where DAYOFMONTH(data_criacao) = DAYOFMONTH(NOW()) and servico_id = :id", ['id' => $codigoServico[0]->id]);

        $numeroSenha = $proximaSenha[0]->total;


        return view('usuarios.senhas.tirar-senha', compact('servico', 'numeroSenha'));
    }

    public function gerarSenha(Request $request)
    {
        //dd(date('Y-m-d'));


        $data = [
            'estado' => 'Em Atendimento',
            'prioridade' => 'NR',
            'codigo' => $request->codigo,
            'servico_id'=> $request->idServico,
            'data_criacao' => date('Y-m-d'),

        ];

        $senha = Senha::create($data);

        if($senha)
            return redirect('requisitar-senha');



    }



}
