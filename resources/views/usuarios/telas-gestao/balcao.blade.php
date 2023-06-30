@extends('componentes.master')

@section('conteudo')

<div class="head-title">
				<div class="left">
					<h1>Balção - 1</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h3>14</h3>
						<p>Total de pessoas que Atendi</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3>32</h3>
						<p>Total de Pessoas Atendidas</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
						<h3>43</h3>
						<p>Total de Pessoas no Dia</p>
					</span>
				</li>
			</ul>


			<div class="table-data">
				<div class="order">
					<div class="head ">
						<h3>Fila de Pessoas em Espera...</h3>
						<button type="button" id="botaoProximo" class="btn btn-outline-primary">Próximo</button>
					</div>
					<table>
						<thead>
							<tr>
								<th>Código</th>
								<th>Hora de Retiro</th>
								<th>Estado</th>
								<th>Balcão</th>
							</tr>
						</thead>
						<tbody id="registrosTabela">
							<!-- <tr>
								<td>
									<img src="../imagens/login/iconeLogin.png">
									<p>A0033</p>
								</td>
								<td>12:37:05</td>
								<td><span class="status completed">Em Atendimento</span></td>
								<td><span> 1</span></td>
							</tr>
							<tr>
								<td>
									<img src="../imagens/login/iconeLogin.png">
									<p>C0012</p>
								</td>
								<td>12:38:47</td>
								<td><span class="status completed">Em Atendimento</span></td>
								<td><span>2</span></td>
							</tr>
							<tr>
								<td>
									<img src="../imagens/login/iconeLogin.png">
									<p>C0012</p>
								</td>
								<td>12:42:15</td>
								<td><span class="status pending">Espera</span></td>
								<td><span>-</span></td>
							</tr>
							<tr>
								<td>
									<img src="../imagens/login/iconeLogin.png">
									<p>B001</p>
								</td>
								<td>12:45:39</td>
								<td><span class="status pending">Espera</span></td>
								<td><span>-</span></td>
							</tr>
							<tr>
								<td>
									<img src="../imagens/login/iconeLogin.png">
									<p>D005</p>
								</td>
								<td>12:45:45</td>
								<td><span class="status pending">Espera</span></td>
								<td><span>-</span></td>
							</tr> -->
							<!-- <tr>
								<td>
									<img src="../imagens/login/iconeLogin.png">
									<p>A0034</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status process">Process</span></td>
							</tr> -->
						</tbody>
					</table>
				</div>
			</div>
@endsection