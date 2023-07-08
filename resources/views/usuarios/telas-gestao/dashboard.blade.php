@extends('componentes.master')

@section('title', 'Painel de Gestão de Senhas')
@section('conteudo')


    <div class="head-title">
        <div class="left">

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
        <i class='bx bxs-group' ></i>
                <span class="text">
                <h3>{{ $espera  }}</h3>
                <p>Total de Pessoas em ESpera</p>
            </span>
        </li>
        <li>
        <i class='bx bxs-group' ></i>
                <span class="text">
                <h3>{{ $atendimento  }}</h3>
                <p>Total Em Atendimento</p>
            </span>
        </li>
      
    </ul>

    <div class="table-data">
        <div class="order">
            <div class="head ">
                <h3>Fila de Pessoas em Espera...</h3>
                <button type="button" id="botaoProximo" class="btn btn-outline-primary btnProximo">Próximo</button>
            </div>
            <table id="table-senhas">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Hora de Retiro</th>
                        <th>Estado</th>

                    </tr>
                </thead>
                <tbody id="senhas">


                </tbody>
            </table>
        </div>
    </div>


@endsection
