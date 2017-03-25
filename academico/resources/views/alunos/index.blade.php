@extends('layout.principal')

@section('conteudo')

    <h1>Alunos</h1>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>Nome</th>
            <th>Cidade</th>
        </tr>
        </thead>
        <tbody>
        @foreach($alunos as $a)

            <tr>

                <td><a href="/alunos/{{ $a->id }}">{{ $a->nome }}</a></td>
                <td>{{ $a->cidade->nome}}</td>

            </tr>
        @endforeach

        </tbody>
    </table>

    @if(Auth::user())
        <a href="/alunos/create" class="btn btn-primary"> Adicionar </a>
    @else
        <div> Faça login para adicionar aluno! </div>
    @endif

@endsection
