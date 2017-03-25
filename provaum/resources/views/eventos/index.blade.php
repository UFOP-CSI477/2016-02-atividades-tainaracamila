@extends('principal')

@section('conteudo')

    <h1>Eventos</h1>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>Nome</th>
            <th>Preço</th>
            <th>Data</th>
        </tr>
        </thead>
        <tbody>
        @foreach($eventos as $e)

            <tr>

                <td><a href="/eventos/{{ $e->id }}">{{ $e->nome }}</a></td>
                <td>{{ $e->preco}}</td>
                <td>{{ $e->data }}</td>

            </tr>
        @endforeach
        </tbody>
    </table>

    <a href="/" class="btn btn-primary"> Voltar </a>



@endsection
