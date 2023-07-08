<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Dashboard, Sistema de Gestão de Fila da Universidade Católica - Ucan">
    <meta name="author" content="Belger, Cliana Malange, Erivelto Silva, Jorge Costa, Rita Mulato">
    <meta name="generator" content="Tela de Informatização dos Visitantes">

    <title>SGF - Gerador Senhas</title>
    <link rel="shortcut icon" href="{{ asset('imagens/icon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('style/bibliotecas/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/fontawesome/css/all.min.css') }}../">
    <link rel="stylesheet" href="{{ asset('style/tela-senha.css') }}">
</head>

<body>
    <div id="Tela1" class="container-fluid mostrar">
        <div class="row shadow rounded-2 bg-white align-items-center m-auto mt-5" style="">
            <div class="col-12 col-md-12 col-sm-12 d-flex mt-5">
                <div class="col-8 col-md-8 col-sm-8 m-auto text-center">
                    <h1 class="display-2 text-primary">
                        <span class="bg-white bg-info rounded shadow-sm px-2 me-2">SG</span>Fila</h1>
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

                                </div>
                                @endisset
                            </div>
                         </div>
                </div>
            </div>

        </div>
    </div>

    <script src="{{ asset('scripts/bibliotecas/all_icon.min.js') }}"></script>
    <script src="{{ asset('scripts/bibliotecas/jqueryLibrary.js') }}"></script>
    <script src="../scripts/bibliotecas/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('scripts/tela-senha.js') }}"></script>
    <script>
        $(".list-group .list-group-item").on('click', function() {
            $(".list-group .list-group-item").removeClass('active')
            $(this).addClass('active')
        })
    </script>

     <script src="{{ asset('scripts/dashboard-funcionario.js') }}"></script>

</body>



 @endsection


