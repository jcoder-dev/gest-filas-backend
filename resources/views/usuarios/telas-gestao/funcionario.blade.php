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
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if ($message = Session::get('sucesso'))

                        <div class="alert alert-success">
                                {{ $message }}
                        </div>

                        @endif
							<form class="row g-3" method="POST" action="{{ route('adicionar-funcionario') }}">
                                @csrf
								<div class="col-md-6">
									<label for="nome" class="form-label">Nome</label>
									<input type="text" class="form-control" id="nome" name="nome">
								</div>
								<div class="col-md-6">
									<label for="sobrenome" class="form-label">Sobrenome</label>
									<input type="text" class="form-control" id="sobrenome" name="sobrenome">
								</div>

                                <div class="col-md-6">
									<label for="username" class="form-label">Username</label>
									<input type="text" class="form-control" id="username" name="username">
								</div>


                                <div class="col-md-6">
									<label for="password" class="form-label">Palavra Passe</label>
									<input type="password" class="form-control" id="password" name="password">
								</div>

                                <div class="col-md-6">
									<label for="email" class="form-label">Endereço de Email</label>
									<input type="email" class="form-control" id="email" name="email">
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
									<select class="form-select" name="cargo" id="cargo">
										<option selected>Gerente</option>
										<option>Atendente</option>
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
										<th scope="col">Username</th>
										<th scope="col">Palavra Passe</th>
										<th scope="col">Email</th>
										<th scope="col">Cargo</th>

                                        <th scope="col">Opções</th>
									</tr>
								</thead>
								<tbody>
                                    @isset($funcionarios)
                                      @foreach ($funcionarios as $func )
                                      <tr>
                                        <td>{{ $func->id }}</td>
										<td>{{ $func->nome }}</td>
										<td>{{ $func->sobrenome }}</td>
										<td>{{ $func->username }}</td>
										<td>{{ $func->password }}</td>
										<td>{{ $func->email }}</td>
										<td>{{ $func->cargo }}</td>

                                        <td>
                                            <a href="#" class="btn btn-primary">
                                              <i class="bx bx-edit"></i>
                                            </a>
                                            <a href="{{ route('deletar-funcionario', ['id'=>$func->id]) }}" class="btn btn-danger">
                                              <i class="bx bx-trash"></i>
                                            </a>
                                        </td>
									</tr>
                                     @endforeach
                                    @endisset
							</table>
						</div>
					</div>

				</div>

@endsection
