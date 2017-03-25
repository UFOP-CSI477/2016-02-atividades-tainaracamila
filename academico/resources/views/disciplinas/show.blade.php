@extends('layout.principal')

@section('conteudo')

    <h1>Excluir disciplina</h1>

    <form method="post" action="/disciplinas/{{ $disciplina->id }}">

        {{ method_field('DELETE') }}
        {{ csrf_field() }}

        Nome: {{ $disciplina->nome }} <br>
        Código: {{ $disciplina->codigo }}<br>
        CH: {{ $disciplina->carga }} <br>

        <input type="submit" class="btn btn-danger" value="Excluir"/>
        <a href="/disciplinas/{{$disciplina->id}}/edit" class="btn btn-primary"> Editar </a>
        <a href="/disciplinas" class="btn btn-primary"> Voltar </a>

@endsection
