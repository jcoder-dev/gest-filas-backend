<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServicoRequest;
use App\Models\Servico;
use Illuminate\Http\Request;

class ServicoController extends Controller
{
    public function index()
    {

        $servicos =  Servico::all();
        return view('usuarios.telas-gestao.servico', compact('servicos'));

    }

    public function adicionar(ServicoRequest $requestServico)
    {
        if($requestServico)
            {
                
                $data = [
                    "codigo" => $requestServico->codigo,
                    "nome" => $requestServico->nome,
                    "descricao" => $requestServico->descricao
                ];

                $servico = Servico::create($data);
                if($servico)
                    return redirect()->back()->with('message', "Servico registrado com sucesso!");

            }
    }

    public function atualizar()
    {

    }

    public function deletar($idServico)
    {
        $servico = Servico::find($idServico);
        if($servico->delete())
              return redirect()->back()->with('message', "Servico eliminado com sucesso!");


    }


}
