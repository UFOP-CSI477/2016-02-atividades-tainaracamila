@extends('layout.principal')

@section('conteudo')

    <h1>Estado</h1>

    <form method="post" action="/estados/{{ $estado->id }}">

        {{ method_field('DELETE') }}
        {{ csrf_field() }}

        Nome: {{ $estado->nome }} <br>
        Sigla: {{ $estado->sigla }}<br>

        <input type="submit" class="btn btn-danger" value="Excluir"/>
        <a href="/estados/{{$estado->id}}/edit" class="btn btn-primary"> Editar </a>
        <a href="/estados" class="btn btn-primary"> Voltar </a>

@endsection
