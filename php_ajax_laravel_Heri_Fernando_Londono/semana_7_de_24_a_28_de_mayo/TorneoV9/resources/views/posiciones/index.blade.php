@extends('layauts.base')
@section('title','Posicion')
@section('content')

    @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <h1>Listado de posiciones</h1>
    <table class="table table-hover" style="margin: 20px;">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Posición</th>
                <th scope="col">Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posiciones as $posicion)
            <tr>
                <td>{{ $posicion->id }}</td>
                <td>{{ $posicion->nombre }}</td>
                <td>
                    <a href="/posiciones/{{ $posicion->id }}/edit"><button type="button" class="btn-jugador btn btn-warning" >Modificar</button></a>
                    <button type="button" class="btn-jugador btn btn-danger">Eliminar</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection