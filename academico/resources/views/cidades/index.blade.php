@extends('layout.principal')

@section('conteudo')

    <h1>Cidades</h1>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>Nome</th>
            <th>Estado</th>
        </tr>
        </thead>
        <tbody>
        @foreach($cidades as $c)

            <tr>

                <td><a href="/cidades/{{ $c->id }}">{{ $c->nome }}</a></td>
                <td>{{ $c->estado->nome}}</td>

            </tr>
        @endforeach

        </tbody>
    </table>

    @if(Auth::user())
        <a href="/cidades/create" class="btn btn-primary"> Adicionar </a>
    @else
        <div> Faça login para adicionar cidade! </div>
    @endif

@endsection
