@extends('layout.principal')

@section('conteudo')

    <h1>Aluno</h1>

    <form method="post" action="/alunos/{{ $aluno->id }}">

        {{ method_field('DELETE') }}
        {{ csrf_field() }}

        Nome: {{ $aluno->nome }} <br>
        Rua: {{ $aluno->rua }} <br>
        Numero: {{ $aluno->numero }} <br>
        Bairro: {{ $aluno->bairro }} <br>
        Cidade: {{ $aluno->cidade_id }}<br>
        CEP: {{ $aluno->cep}} <br>
        Email: {{ $aluno->mail }} <br>

        <input type="submit" class="btn btn-danger" value="Excluir"/>
        <a href="/alunos/{{$aluno->id}}/edit" class="btn btn-primary"> Editar </a>
        <a href="/alunos" class="btn btn-primary"> Voltar </a>

@endsection
