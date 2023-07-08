<?php

namespace App\Http\Controllers;

use App\Http\Requests\FuncionarioRequest;
use App\Models\Funcionario;
use App\Models\Senha;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FuncionarioController extends Controller
{


    public function index()
    {
        $funcionarios = Funcionario::all();
        return view('usuarios.telas-gestao.funcionario', compact('funcionarios'));

    }

    public function listar(){

        $funcionarios = Funcionario::all();
        return response()->json($funcionarios);

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

        $senhas = DB::select('select * from senhas where DAYOFMONTH(data_criacao) = DAYOFMONTH(NOW()) order by created_at');


        $funcionario = Funcionario::where('email',$email)->get();

        if(isset($funcionario))
        {
        if($funcionario && $senha == $funcionario[0]->password)
        {
            $request->session()->put('email', $email);
            $request->session()->put('username', $funcionario[0]->username);
            $request->session()->put('cargo', $funcionario[0]->cargo);

            $senhasEspera = DB::select('select  COUNT(*) as espera from senhas where DAYOFMONTH(data_criacao) = DAYOFMONTH(NOW()) and estado = "Em Espera" order by created_at');
            $espera = $senhasEspera[0]->espera;
            $emAtendimento = $senhasEspera = DB::select('select  COUNT(*) as atendimento from senhas where DAYOFMONTH(data_criacao) = DAYOFMONTH(NOW()) and estado = "Em Atendimento" order by created_at');

            $atendimento = $emAtendimento[0]->atendimento;


            return  view('usuarios.telas-gestao.dashboard', compact('senhas', 'espera', 'atendimento'));
        }

        else
        {
            return redirect('/')->with('erro','Erro: Verifique as suas credenciais e tente novamente!');

        }
        }





    }

    public function logout(Request $request)
    {
        $request->session()->forget('username');
        return view('admin.login');
    }
}
