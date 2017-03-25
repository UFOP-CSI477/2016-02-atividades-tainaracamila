@extends('layout.principal')

@section('conteudo')

    <h1>Inserir turma</h1>

    <form method="post" action="/turmas">

        {{csrf_field()}}

        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" />
        </div>

        <div class="form-group">
            <label>Disciplina</label>
            <select name="disciplina_id">
                @foreach($disciplinas as $d)
                    <option value="{{$d->id}}"> {{$d->nome}}</option>
                @endforeach
            </select>
        </div>

        <input type="submit" class="btn btn-primary" value="Salvar"/>

    </form>


@endsection