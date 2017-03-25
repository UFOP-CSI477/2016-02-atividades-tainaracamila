@extends('principal')

@section('conteudo')

    <h1>Lista de eventos cadastrados</h1>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>Atleta</th>
            <th>Evento</th>
            <th>Data</th>
            <th>Pago</th>
        </tr>
        </thead>
        <tbody>
        @foreach($registros as $r)

            <tr>

                <td>{{ $r->user->name }}</td>
                <td>{{ $r->evento->nome}}</td>
                <td>{{ $r->data }}</td>
                <td>{{ $r->pago }}</td>

            </tr>
        @endforeach
        </tbody>
    </table>

    <a href="/" class="btn btn-primary"> Voltar </a>



@endsection
