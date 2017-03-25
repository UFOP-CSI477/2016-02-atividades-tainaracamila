@extends('principal')

@section('conteudo')

    <h1>Registrar em evento</h1>

    <form method="post" action="/registros">

        {{csrf_field()}}


        <div class="form-group">
            <label>Evento</label>
            <select name="evento_id">
                @foreach($eventos as $e)
                    <option value="{{$e->id}}"> {{$e->nome}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="data">Data</label>
            <input type="text" class="form-control" name="data" />
        </div>

        <div class="form-group>
            <label for="pago">Pago</label>
            <input type="text" class="form-control" name="pago" />
        </div>

        <br>

        <input type="submit" class="btn btn-primary" value="Salvar"/>

    </form>


@endsection