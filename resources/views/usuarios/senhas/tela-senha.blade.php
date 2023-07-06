@extends('componentes.principal-senha')
@section('content')

<div class="col-md-12 m-auto text-center">

    <h1 class="display-6 mb-4">Escolha Sua Opção!</h1>
</div>
<form method="POST" action="{{ route('senha-servico') }}">

<div class="col-12 col-md-12 col-sm-12 p-3">
    <div class="col-12 col-md-12 col-sm-12 text-center m-auto p-2" id="side-escolha">
        <select id="tipo-usuario" class="form-select form-select-md mb-4 "
             aria-label="form-select-lg example">
             <option value="1" selected>Sou Estudante da Ucan</option>
            <option value="2">Não Sou Estudante da Ucan</option>
        </select>


    <div id="id" class="input-group mb-3 d-flex">

            <input id="idEstudante" name="idEstudante" type="text" class="form-control" placeholder="Ex : 1000027337"
            aria-label="Recebendo Id Estudante" aria-describedby="spanIDEstudante">
           <span class="input-group-text" >ID Estudante</span>


    </div>

   <div class="btn-group shadow-sm col-sm-12 p-3 mb-5 bg-body rounded" role="group"
      aria-label="Basic outlined example">
 <button type="button" id="botaoVoltar" class="btn btn-outline-danger"><i
        class="fas fa-arrow-circle-left"></i> Voltar
 </button>
        @csrf

        <button type="submit" id="botaoAvancar" class="btn btn-outline-primary">
            Avançar
            <i class="fas fa-arrow-circle-right"></i>
        </button>

    </form>


    </div>
</div>

@endsection

