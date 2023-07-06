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
             return redirect()->back()->with("sucesso", "Funcionário registrado com sucesso");
        }

        else
        {
            return session()->flash('erro', 'Erro Inesperado: Tente novamente!');
        }

        }

    }

    public function editar($idFuncionario)
    {
        $funcionario = Funcionario::find($idFuncionario);
        if($funcionario)
        {
            $funcionario->nome = "";
        }
    }

    public function deletar($idFuncionario)
    {
        $funcionario = Funcionario::find($idFuncionario);

        if($funcionario->delete())
            return redirect()->back()->with('message', 'Funcionario eliminado com sucesso');
        else
            return redirect()->back()->with('message', 'Funcionario não pode ser eliminado devio aos registros relacionados!');

    }

    public function login(Request $request)
    {

        $email = $request->email;
        $senha = $request->senha;

        $funcionario = Funcionario::where('email',$email)->get();

        //dd($funcionario[0]->nome);

        if($funcionario && $senha == $funcionario[0]->password)
        {
            $request->session()->put('email', $email);
            return  view('usuarios.telas-gestao.dashboard');
        }

        else
        {
            return redirect()->back()->with('erro-login', 'Verifique as suas credenciais e tente novamente');
        }
    }

    public function logout(Request $request)
    {
        $request->session()->forget('username');
        return view('admin.login');
    }
}
