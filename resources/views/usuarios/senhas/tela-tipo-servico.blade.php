
@extends('componentes.principal-senha')
@section('content')
<div class="col-12 col-md-12 col-sm-12 p-3">
    <div class="col-md-12 text-center m-auto">
        <p>Selecione uma das opções de <i> Serviços</i> para poder ser <i>Atendido</i> <strong>Azem
             Mbora Baby, upsi upsi chegou</strong>.</p>
    </div>
    <div class="col-md-10 col-sm-10 text-center m-auto">
        <div class="col-10 text-center m-auto">
            <ul class="list-group">

                @foreach ($servicos as $servico)
                  <a href="{{ route('pagina-tirar-senha',  ['idServico' => $servico->id]) }}"><li class="list-group-item list-group-item-action rounded mt-3 opcao">{{ $servico->nome }}</li></a>

                @endforeach

            </ul>
         </div>
         <hr class="h-color mx-2">
        <div class="btn-group shadow-sm col-sm-12 p-2 bg-body rounded-circle" id="btn-custom">
            <button type="button" id="botaoRequisitarSenha" class="btn btn-outline-primary rounded-circle">
                Voltar<br> <i class="fas fa-receipt"></i>

       </div>
    </div>
 </div>
 @endsection
