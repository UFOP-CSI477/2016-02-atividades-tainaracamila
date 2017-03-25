@extends('principal')

@section('conteudo')

    <h1>Lista de Atletas</h1>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>Nome</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $u)

            <tr>
                <td>{{ $u->name }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <a href="/" class="btn btn-primary"> Voltar </a>



@endsection
