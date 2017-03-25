@extends('layout.principal')

@section('conteudo')

    <h1>Editar Aluno</h1>

    <form method="post" action="/alunos/{{ $aluno->id }}">

        {{ method_field('PATCH') }}
        {{ csrf_field() }}


        Nome: <input type="text" name="nome" value="{{ $aluno->nome }}" /><br>
        Rua: <input type="text" name="rua" value="{{ $aluno->rua }}" /><br>
        Numero: <input type="text" name="numero" value="{{ $aluno->numero }}" /><br>
        Bairro: <input type="text" name="bairro" value="{{ $aluno->bairro }}" /><br>
        Cidade: <select name="cidade_id">
            @foreach($cidades as $c)
                <option value="{{$c->id}}"> {{$c->nome}}</option>
            @endforeach
        </select>
        <br>
        CEP: <input type="text" name="cep" value="{{ $aluno->cep }}" /><br>
        Email: <input type="text" name="mail" value="{{ $aluno->mail }}" /><br>


        <input type="submit" value="Salvar"/>

@endsection
