@extends('layout.principal')

@section('conteudo')

    <h1>Editar Cidade</h1>

    <form method="post" action="/cidades/{{ $cidade->id }}">

        {{ method_field('PATCH') }}
        {{ csrf_field() }}

        Nome: <input type="text" name="nome" value="{{ $cidade->nome }}" /><br>
        Estado: <select name="estado_id">
            @foreach($estados as $e)
                <option value="{{$e->id}}"> {{$e->nome}}-{{$e->sigla}}</option>
            @endforeach
        </select>

        <input type="submit" value="Salvar"/>

@endsection
