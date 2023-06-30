@extends('componentes.principal-senha')


@section('content')
<div class="col-md-12 m-auto text-center">
    <h1 class="display-6 mb-4">Requisite já sua senha segue o próximo na Fila!</h1>
</div>
<div class="col-12 col-md-12 col-sm-12 p-3">
     <div class="col-md-6 text-center m-auto p-2">
        <div class="btn-group shadow-sm col-sm-12 p-3 mb-5 bg-body rounded" role="group"
                            aria-label="Basic outlined example">
            <a href="{{ route('selecionar-tipo') }}" type="button" id="botaoQueroSenha" class="btn btn-outline-primary">Quero uma
                  Senha!<i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
</div>
@endsection
