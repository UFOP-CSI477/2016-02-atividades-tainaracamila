@extends('principal')

@section('conteudo')

    <h1>Exibir evento</h1>

    <form method="post" action="/disciplinas/{{ $evento->id }}">

        {{ csrf_field() }}

        Nome: {{ $evento->nome }}<br>
        Preço: {{ $evento->preco }} <br>
        Data: {{ $evento->data }} <br> <br>
    </form>

        <a href="/eventos" class="btn btn-primary">Voltar</a>

@endsection