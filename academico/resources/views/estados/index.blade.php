@extends('layout.principal')

@section('conteudo')

    <h1>Estados</h1>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>Nome</th>
            <th>Sigla</th>
        </tr>
        </thead>
        <tbody>
        @foreach($estados as $e)

            <tr>

                <td><a href="/estados/{{ $e->id }}">{{ $e->nome }}</a></td>
                <td>{{ $e->sigla}}</td>

            </tr>
        @endforeach

        </tbody>
    </table>

    @if(Auth::user())
        <a href="/estados/create" class="btn btn-primary"> Adicionar </a>
    @else
        <div> Faça login para adicionar estado! </div>
    @endif

@endsection
