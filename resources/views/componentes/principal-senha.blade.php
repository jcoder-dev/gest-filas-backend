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
    <link rel="stylesheet" href="{{ asset('/style/telaSenha.css') }}">
</head>

<body>
    <div id="Tela1" class="container-fluid mostrar">
        <div class="row">
            <div class="w-75 justify-content-center bg-body m-auto p-3 mt-5 shadow rounded">
                <div class="col-12 col-md-12 col-sm-12 d-flex mt-3">
                    <div class="col-md-6 m-auto text-center">
                        <h1 class="display-2 text-primary"><span
                                class="bg-white bg-info rounded shadow-sm px-2 me-2">SG</span> Fila</h1>
                            @yield('content')
                    </div>
                </div>
               
            </div>
        </div>
    </div>


    


  





    <script src="{{ asset('scripts/bibliotecas/all_icon.min.js') }}"></script>
    <script src="{{ asset('scripts/bibliotecas/jqueryLibrary.js') }}"></script>
    <script src="../scripts/bibliotecas/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('scripts/telaSenha.js') }}"></script>

</body>

</html>