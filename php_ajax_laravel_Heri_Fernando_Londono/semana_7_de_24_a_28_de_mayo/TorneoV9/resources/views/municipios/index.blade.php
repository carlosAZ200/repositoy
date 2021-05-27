@extends('layauts.base')
@section('title','Municipio')
@section('content')
    @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <h1>Listado de municipios</h1>
    <table class="table table-hover" style="margin: 20px;">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Municipio</th>
                <th scope="col">Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($municipios as $municipio)
            <tr>
                <td>{{ $municipio->id }}</td>
                <td>{{ $municipio->nombre }}</td>
                <td>
                    <a href="/municipios/{{ $municipio->id }}/edit"><button type="button" class="btn-jugador btn btn-warning" >Modificar</button></a>
                    <button type="button" class="btn-jugador btn btn-danger">Eliminar</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
    