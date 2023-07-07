
@extends('componentes.principal-senha')
@section('content')
<div class="col-12 col-md-12 col-sm-12 p-3">
    <div class="col-md-12 text-center m-auto">
        <p>APRTE<i> O</i> BOTAO  <i>ABAIXO</i> <strong></strong>.</p>
    </div>
    <div class="col-md-10 col-sm-10 text-center m-auto">
         @isset($servico)
            <p>{{$servico->codigo.''.$numeroSenha}}</p>
         @endisset

         <form  method="POST" action="{{ route('gerar-senha') }}" >
            @csrf
            <input type="text" name="codigo" id="" value="{{$servico->codigo.''.$numeroSenha}}" hidden>
            <input type="text" name="idServico" id="" value="{{$servico->id}}" hidden>

            <div class="btn-group shadow-sm col-sm-12 p-2 bg-body rounded-circle" id="btn-custom">
                <button type="submit" id="botaoRequisitarSenha" class="btn btn-outline-primary rounded-circle">
                    Requisitar Senha <br> <i class="fas fa-receipt"></i>

           </div>
         </form>


    </div>
 </div>
 @endsection
