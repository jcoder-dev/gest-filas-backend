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
                <form class="row g-3">
                    <div class="col-md-6">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome">
                    </div>

                    <div class="col-md-4">
                        <label for="inputState" class="form-label">Associar ao Balcão</label>
                        <select id="inputState" class="form-select">
                            <option selected>Choose...</option>
                            <option selected>1</option>
                            <option selected>2</option>
                            <option selected>3</option>
                        </select>
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
                            <th scope="col">Nome</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Opções</th>

                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Tesouraria</td>~
                        <td>  apresentar documentação e  informações do curso do aluno</td>
                        <td>
                            <a href="#" class="btn btn-primary">
                              <i class="bx bx-edit"></i>
                            </a>
                            <a href="#" class="btn btn-danger">
                              <i class="bx bx-trash"></i>
                            </a>
                          </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Secretária</td>
                        <td>  apresentar documentação e  informações do curso do aluno</td>
                        <td>
                            <a href="#" class="btn btn-primary">
                              <i class="bx bx-edit"></i>
                            </a>
                            <a href="#" class="btn btn-danger">
                              <i class="bx bx-trash"></i>
                            </a>
                          </td>
                    </tr>

                </table>
            </div>
        </div>

    </div>
@endsection
