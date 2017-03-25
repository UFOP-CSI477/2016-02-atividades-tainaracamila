@extends('layout.principal')

@section('conteudo')

    <h1>Turmas</h1>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>Nome</th>
            <th>Disciplina</th>
        </tr>
        </thead>
        <tbody>
        @foreach($turmas as $t)

            <tr>

                <td><a href="/turmas/{{ $t->id }}">{{ $t->nome }}</a></td>
                <td>{{ $t->disciplina->nome}}</td>

            </tr>
        @endforeach
        </tbody>
    </table>

    @if(Auth::user())
        <a href="/turmas/create" class="btn btn-primary"> Adicionar </a>
    @else
        <div> Faça login para adicionar turma! </div>
    @endif


@endsection
