@extends('layout.principal')

@section('conteudo')

    <h1>Inserir cidade</h1>

    <form method="post" action="/cidades">

        {{csrf_field()}}

        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" />
        </div>

        <div class="form-group">
            <label>Estado</label>
            <select name="estado_id">
                @foreach($estados as $e)
                        <option value="{{$e->id}}"> {{$e->nome}}-{{$e->sigla}}</option>
                    @endforeach
            </select>

        </div>

        <input type="submit" class="btn btn-primary" value="Salvar"/>

    </form>


    @endsection