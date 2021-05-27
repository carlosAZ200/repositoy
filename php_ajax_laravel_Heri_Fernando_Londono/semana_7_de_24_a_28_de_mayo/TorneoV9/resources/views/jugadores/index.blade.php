@extends('layauts.base')
@section('title','Jugador')
@section('content')

<!-- ______________________________________________________ -->
<!-- El siguiente código permite mostrar el status si existe.
Revisa si status está definida o no (como un isset) y 
si es el caso imprime el valor que le llega como status-->
@if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<h1>Listado de jugadores</h1>
<table class="table table-hover" style="margin: 20px;">
    <thead>
        <tr>
            <th scope="col">Foto</th>
            <th scope="col">Nombre</th>
            <th scope="col">Posición</th>
            <th scope="col">Número</th>
            <th scope="col">Equipo</th>
            <th scope="col">Acción</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($jugadores as $jugador)
        <tr>
            <td>
                <img class="img-jugadores" src="/images/jugadores/{{ $jugador->foto }}">
                <!-- ______________________________________________________ -->
                <!-- 
                Lo mismo que lo anterior
                <img class="img-jugadores" src="{{ asset('images/jugadores/' . $jugador->foto) }}">
                 -->
                
            </td>
            <td>{{ $jugador->nombre }}</td>
            <!-- ______________________________________________________ -->
            <!-- Se ingresa el campo que corresponde a posiciones y este, gracias al inerjoin,
            envía en su lugar un array con los elementos id y nombre del campo segun inerjoin -->
            <td>{{ $jugador->posicion->nombre }}</td>
            <td>{{ $jugador->numero }}</td>
            <td>{{ $jugador->equipo->nombre }}</td>
            <td>
                <a href="/jugadores/{{ $jugador->id }}"><button type="button" class="btn-jugador btn btn-success">Ver</button></a>
                <a href="/jugadores/{{ $jugador->id }}/edit"><button type="button" class="btn-jugador btn btn-warning" >Modificar</button></a>
                <button type="button" class="btn-jugador btn btn-danger">Eliminar</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
