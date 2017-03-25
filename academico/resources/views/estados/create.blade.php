@extends('layout.principal')

@section('conteudo')

    <h1>Inserir estado</h1>

    <form method="post" action="/estados">

        {{csrf_field()}}

        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" />
        </div>

        <div class="form-group">
            <label for="sigla">Sigla</label>
            <input type="text" class="form-control" name="sigla" />
        </div>


        <input type="submit" class="btn btn-primary" value="Salvar"/>

    </form>


@endsection