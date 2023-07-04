<?php

namespace App\Http\Controllers;

use App\Http\Requests\FuncionarioRequest;
use App\Models\Funcionario;
use Illuminate\Http\Request;



class FuncionarioController extends Controller
{


    public function index()
    {
        $funcionarios = Funcionario::all();
        return view('usuarios.telas-gestao.funcionario', compact('funcionarios'));

    }

    public function adicionar(FuncionarioRequest $funcionarioRequest)
    {

        if($funcionarioRequest)
        {

            $data = [
            "nome" => $funcionarioRequest->nome,
            "sobrenome"=> $funcionarioRequest->sobrenome,
             "username" => $funcionarioRequest->username,
             "email" => $funcionarioRequest->email,
             "password" => $funcionarioRequest->password,
             "cargo" => $funcionarioRequest->cargo
        ];

        $criarFuncionario = Funcionario::create($data);

        if($criarFuncionario)
        {
             return redirect()->back()->with("message", "Funcionário registrado com sucesso");
        }

        else
        {
            return session()->flash('message', 'Erro Inesperado: Tente novamente!');
        }

        }

    }
}
