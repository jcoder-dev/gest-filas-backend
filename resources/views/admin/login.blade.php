<!doctype html>
<html lang="pt">

<head>
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Dashboard, Sistema de Gestão de Fila da Universidade Católica - Ucan">
	<meta name="author" content="Belger, Cliana Manlaje, Erivelto Silva, Jorge Costa, Rita Mulato">
	<meta name="generator" content="Dashboard do Funcionário">

	<title>Sistema de Gestao de Fila - Login</title>
  <link rel="shortcut icon" href="imagens/icon.png" type="image/x-icon">
  <link rel="stylesheet" href="{{ asset('style/fontawesome/css/all.min.css')}}">
  <link rel="stylesheet" href="{{ asset('style/fontawesome/css/fontawesome.min.css') }}">
  <link href=" {{ asset('style/bibliotecas/bootstrap.min.css') }}" rel="stylesheet">
  <script src="{{asset('scripts/bibliotecas/jqueryLibrary.js')}}"></script>
  <script src=" {{ asset('scripts/bibliotecas/bootstrap.bundle.min.js') }}"></script>

  <link href="{{ asset('style/index.css') }}" rel="stylesheet">

</head>
<body>

  <div class="container-fluid">
    <div class="row w-50 shadow rounded-2 bg-white align-items-center m-auto mt-5">

      <form class="text-center m-auto" method="POST" action="{{ route('funcionario.login') }}">
        @csrf
        <div class="col-12 col-md-12 col-sm-12 d-flex mt-4">
          <div class="col-md-6 m-auto text-center">
              <h1 class="display-2 text-primary"><span class="bg-white bg-info rounded shadow-sm px-2 me-2">SG</span>Fila</h1>
              <h6 class="display-6 mb-4 ">Seja <strong>Bem-Vindo</strong></h6>
          </div>
        </div>
        @if ($message = Session::get('erro'))
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @endif
        <div class="form-floating text-secondary col-8 col-md-8 col-sm-12 m-auto">

          <input type="text" name="email" id="email" placeholder="Digite o seu email" class="form-control rounded"  maxlength="75" >
          <label for="email">Digite o seu email</label>
        </div>
        <div class="form-floating text-secondary col-8 col-md-8 col-sm-12 m-auto">
          <input type="password" name="senha" class="form-control rounded mt-2" id="senha" placeholder="Digite a sua senha" maxlength="32" minlength="8" >
          <label for="senha">Digite a sua senha</label>
        </div>
        <div class="btn-group shadow-sm col-8 col-md-8 col-sm-8 mt-2 p-3 bg-body rounded" role="group" aria-label="Basic outlined example">
            <button type="button" class="btn btn-outline-danger" onclick="window.location.href = 'TelaInicial.html'">
                <i class="fas fa-arrow-circle-left"></i> Informação
            </button>
            <button type="submit" id="botaoEntrar"  class="btn btn-outline-primary" >
                Login<i class="fas fa-arrow-circle-right"></i>
            </button>
      </div>

      <p class="mt-5 mb-3 text-muted">&copy; 2023</p>
      </form>
    </div>
  </div>



</body>
</html>
