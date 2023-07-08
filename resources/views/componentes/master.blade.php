<!DOCTYPE html>
<html lang="pt-pt">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Dados Balcão, Sistema de Gestão de Fila da Universidade Católica - Ucan">
    <meta name="author" content="Belger, Cliana Malange, Erivelto Silva, Jorge Costa, Rita Mulato">
    <meta name="generator" content="Tela dos Dados do Balcão">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
	<title>SGF - @yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('imagens/icon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('style/bibliotecas/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/fontawesome/css/all.min.css') }}../">
	<link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel='stylesheet'>
	<link rel="stylesheet" href="{{ asset('style/header-menu.css') }}">


    <link rel="stylesheet" href="{{ asset('style/datatables/datatables.css') }}">


</head>
<body>


	<!-- SIDEBAR -->
	<div id="sidebar">
		<a href="{{ route('dashboard') }}" class="brand">
			<h1 class="display-2 text-primary">
				<span class=" bg-info rounded shadow-sm px-2 me-2">SG</span>
			</h1>
		</a>
		<ul class="side-menu top">
			<li >
				<a href="{{ route('dashboard') }}">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
            @if (Session::get('cargo') == "Gerente")
            <li>
                <a href="{{ route('gestao-funcionario') }}">
                    <i class='bx bxs-group' ></i>
                    <span class="text">Funcionarios</span>
                </a>
            </li>
            <li>
				<a href="{{ route('gestao-servico') }}">
					<i class='bx bxs-doughnut-chart'></i>
					<span class="text">Serviços</span>
				</a>
			</li>
            @endif



		</ul>
		<ul class="side-menu">

			<li>
                <form method="POST" action="{{ route('funcionario.logout') }}">
                    @csrf
                    <button  class="logout btn btn-danger">
                        <i class='bx bxs-log-out-circle' ></i>
                        <span class="text">Logout</span>
                    </button>
                </form>

			</li>
		</ul>
	</div>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
            <div class="mode-user">

				<div class="profile">
					<i class='bx bxs-user' ></i>
                    @if ($message = Session::get('username'))
					<label id="user-name" class="text-light">{{ $message }}</label>
                    @endif
				</div>
			</div>

		</nav>
		<!-- NAVBAR -->



		<!-- MAIN -->
		<main>

              @yield('conteudo')

		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->



	<script src="{{ asset('scripts/header-menu.js')}}"></script>
    <script src="{{ asset('scripts/tela-senha.js')}}"></script>
	<script src="{{ asset('scripts/bibliotecas/jqueryLibrary.js') }}"></script>
	<script src="{{ asset('scripts/bibliotecas/bootstrap.bundle.min.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
		crossorigin="anonymous"></script>

	<script src="https://code.jquery.com/jquery-3.7.0.min.js"
		integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

    <script src="{{ asset('scripts/dashboard-funcionario.js') }}"></script>



	<script
		src="https://unpkg.com/bootstrap-table@1.21.4/dist/extensions/export/bootstrap-table-export.min.js"></script>


	<script src=" {{ asset('style/datatables/datatables.js') }}"></script>

    <script>
		$(document).ready(function () {
			tabela = $('#table').DataTable({
				language: {
					lengthMenu: 'Mostrando _MENU_ registros por página',
					zeroRecords: 'Nada encontrado - Estamos resolvendo...',
					info: 'Mostrando _PAGE_ de _PAGES_',
					infoEmpty: 'Nenhum registro disponível',
					infoFiltered: '(filtrando de _MAX_ um total de registros)',
					sSearch: "Pesquisar: ",
					oPaginate: {
						"sFirst": "Primeiro",
						"sLast": "Último",
						"sNext": "Seguinte",
						"sPrevious": "Anterior"

					},
				}

				});
		});



	</script>

</body>
</html>
