@extends('layout.principal')

@section('conteudo')

    <h1>Editar turma</h1>

    <form method="post" action="/turmas/{{ $turma->id }}">

        {{ method_field('PATCH') }}
        {{ csrf_field() }}

        Nome: <input type="text" name="nome" value="{{ $turma->nome }}" /><br>
        Disciplina: <select name="disciplina_id">
            @foreach($disciplinas as $d)
                <option value="{{$d->id}}"> {{$d->nome}}</option>
            @endforeach
        </select>

        <br>

        <input type="submit" value="Salvar"/>

@endsection
