@extends('componentes.master')

@section('title', 'Gestão de Serviços')

@section('conteudo')
<div class="container ">
    <div class="row">
        <div class="card">
            <div class="card-header">
                Adicionar Novo Serviço
            </div>
            <div class="card-body">
                <form class="row g-3" method="POST" action="{{ route('adicionar-servico') }}">
                    @csrf

                    <div class="col-md-6">
                        <label for="codigo" class="form-label">Código do Serviço</label>
                        <input type="text" class="form-control" id="codigo" name="codigo">
                    </div>

                    <div class="col-md-6">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome">
                    </div>



                    <div class="col-md-6">
                        <label for="descricao" class="form-label">Descrição</label>
                        <textarea id="inputPassword4" class="form-control" name="descricao" cols="30" rows="5" placeholder="faça uma breve descrição sobre o novo serviço"></textarea>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Adicionar</button>
                    </div>
                </form>

            </div>
        </div>

    </div>
    <div class="row">
        <div class="card">
            <div class="card-header">
                Listagem de Serviços
            </div>
            <div class="card-body">
                <table id="table" class="display">

                    <caption>List of users</caption>
                    <thead>
                        <tr>
                            <th scope="col">Código</th>
                            <th scope="col">Tipo de Senha</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Opções</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($servicos as $servico )
                        <tr>
                            <td>{{ $servico->id }}</td>
                            <td>{{ $servico->codigo }}</td>
                            <td>{{ $servico->nome }}</td>
                            <td>{{ $servico->descricao }}</td>
                            <td>
                                <a href="#" class="btn btn-primary">
                                  <i class="bx bx-edit"></i>
                                </a>
                                <a href="{{ route('deletar-servico', ['id'=>$servico->id]) }}" class="btn btn-danger">
                                  <i class="bx bx-trash"></i>
                                </a>
                              </td>
                        </tr>
                        @endforeach



                </table>
            </div>
        </div>

    </div>
@endsection
