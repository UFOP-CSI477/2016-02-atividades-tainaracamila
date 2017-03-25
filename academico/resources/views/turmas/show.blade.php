@extends('layout.principal')

@section('conteudo')

    <h1>Turma</h1>

    <form method="post" action="/turmas/{{ $turma->id }}">

        {{ method_field('DELETE') }}
        {{ csrf_field() }}

        Nome: {{ $turma->nome }} <br>
        Disciplina: {{ $turma->disciplina_id }}<br>

        <input type="submit" class="btn btn-danger" value="Excluir"/>
        <a href="/turmas/{{$turma->id}}/edit" class="btn btn-primary"> Editar </a>
        <a href="/turmas" class="btn btn-primary"> Voltar </a>

@endsection
