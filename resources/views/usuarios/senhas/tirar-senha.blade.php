
@extends('componentes.principal-senha')
@section('content')

 <div class="col-10 col-md-10 col-sm-10 text-center m-auto">
    <div class="col-10 col-md-10 col-sm-10 text-center m-auto">
        <p><strong>Dados Da Sua Senha:</strong>.</p>
    </div>
    <div class="col-12 col-md-12 col-sm-12 text-center m-auto mb-5">
        @isset($servico)

        <div class="card">
            <div class="card-body">
                <div class="col-10 col-md-10 col-sm-10 text-center m-auto">
                    <p>Serviço Escolhido  : <span class="bg-white bg-info rounded shadow-sm px-2 me-2">{{ $servico->nome }}</span></p>
                    <p>Código da Senha Gerada</p>
                    <h1 class="display-2 text-primary">
                        <span class="bg-white bg-info rounded shadow-sm px-2 me-2">{{$servico->codigo.''.$numeroSenha}}</span>
                    </h1>
                </div>
            </div>
            <form  method="POST" action="{{ route('gerar-senha') }}" >
                @csrf
                <input type="text" name="codigo" id="" value="{{$servico->codigo.''.$numeroSenha}}" hidden>
                <input type="text" name="idServico" id="" value="{{$servico->id}}" hidden>

                <div class="btn-group shadow-sm col-sm-12 p-2 bg-body rounded-circle" id="btn-custom">
                    <button type="submit" id="botaoRequisitarSenha" class="btn btn-outline-primary rounded-circle btnRequisitar">
                        Requisitar Senha <br> <i class="fas fa-receipt"></i>

               </div>
             </form>
        </div>
        @endisset
    </div>
 </div>
 @endsection


