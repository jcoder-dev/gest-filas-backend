@extends('componentes.master')

@section('title', 'Gestão de Funcionários')
@section('conteudo')

<div class="container ">
				<div class="row">
					<div class="card">
						<div class="card-header">
							Adicionar Novo Funcionário
						</div>
						<div class="card-body">
							<form class="row g-3">
								<div class="col-md-6">
									<label for="nome" class="form-label">Nome</label>
									<input type="text" class="form-control" id="nome" name="nome">
								</div>
								<div class="col-md-6">
									<label for="sobrenome" class="form-label">Sobrenome</label>
									<input type="text" class="form-control" id="sobrenome" name="sobrenome">
								</div>

								<div class="col-md-6">
									<label for="inputCity" class="form-label">Turno</label>
									<input type="text" class="form-control" id="turno" name="turno">
								</div>

								<div class="col-md-6">
									<label for="inputCity" class="form-label">Endereço</label>
									<input type="text" class="form-control" id="endereco" name="endereco">
								</div>
								<div class="col-md-6">
									<label for="inputCity" class="form-label">Número do Telemóvel</label>
									<input type="text" class="form-control" id="telefone" name="telefone">
								</div>
								<div class="col-md-4">
									<label for="inputState" class="form-label">Funcão</label>
									<select id="inputState" class="form-select">
										<option selected>Choose...</option>
										<option>...</option>
									</select>
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
							Listagem de Funcionários
						</div>
						<div class="card-body">
							<table id="table" class="display">

								<caption>List of users</caption>
								<thead>
									<tr>
										<th scope="col">Código</th>
										<th scope="col">Nome</th>
										<th scope="col">Sobrenome</th>
										<th scope="col">Função</th>
										<th scope="col">Turno</th>
										<th scope="col">Endereço</th>
										<th scope="col">Número de Telemóvel</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row">1</th>
										<td>Mark</td>
										<td>Otto</td>
										<td>@mdo</td>
										<td>Mark</td>
										<td>Otto</td>
										<td>@mdo</td>

									</tr>
									<tr>
										<th scope="row">2</th>
										<td>Jacob</td>
										<td>Thornton</td>
										<td>@fat</td>
										<td>Mark</td>
										<td>Otto</td>
										<td>@mdo </td>


									</tr>
									<tr>
										<th scope="row">3</th>
										<td>Larry</td>
										<td>the Bird</td>
										<td>@twitter</td>
										<td>Mark</td>
										<td>Otto</td>
										<td>@mdo</td>

									</tr>
							</table>
						</div>
					</div>

				</div>

@endsection
