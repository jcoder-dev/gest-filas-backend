@extends('componentes.master')

@section('title', 'Painel de Gestão de Senhas')
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

                    </tr>
                </thead>
                <tbody id="senhas">
                    @foreach ($senhas as $senha )
                           <tr>
                             <td>{{ $senha->codigo }}</td>
                             <td>{{ $senha->created_at }}</td>
                             <td>{{ $senha->estado }}</td>

                           </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>



@endsection
