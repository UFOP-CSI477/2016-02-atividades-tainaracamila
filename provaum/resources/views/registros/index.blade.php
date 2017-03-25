@extends('principal')

@section('conteudo')

    <h1>Registros</h1>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>Nome do Atleta</th>
            <th>Evento</th>
            <th>Data</th>
            <th>Pago</th>
        </tr>
        </thead>
        <tbody>
        @foreach($registros as $r)

            <tr>

                <td>{{ $r->user->name }}</a></td>
                <td>{{ $r->evento->nome}}</td>
                <td>{{ $r->data }}</td>
                <td>{{ $r->pago }}</td>

            </tr>
        @endforeach
        </tbody>
    </table>

    <a href="/" class="btn btn-primary"> Voltar </a>



@endsection
