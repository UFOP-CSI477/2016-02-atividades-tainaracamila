@extends('layout.principal')

@section('conteudo')

    <h1>Cidade</h1>

    <form method="post" action="/cidades/{{ $cidade->id }}">

        {{ method_field('DELETE') }}
        {{ csrf_field() }}

        Nome: {{ $cidade->nome }} <br>
        Estado: {{ $cidade->estado_id }}<br>

        <input type="submit" class="btn btn-danger" value="Excluir"/>
        <a href="/cidades/{{$cidade->id}}/edit" class="btn btn-primary"> Editar </a>
        <a href="/cidades" class="btn btn-primary"> Voltar </a>

@endsection
