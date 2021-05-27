@extends('layauts.base')
@section('title','Detalle jugador')
@section('content')
    <h1>Detalle de jugador {{$id}}</h1>
    <div class="row">
        <div class="col-sm-4">
            <img src="/images/jugadores/{{ $jugador->foto }}" class="rounded-circle">
        </div>
        <div class="col-sm-8">
            <p class="h3">{{ $jugador->nombre }}</p>
            <p class="h5">{{ $jugador->posicion->nombre }}</p>
            <p class="h5">{{ $jugador->numero }}</p>
            <p class="h5">{{ $jugador->equipo->nombre }}</p>
            
            <a href="/jugadores/{{ $id }}/edit"><button type="button" class="btn btn-warning" >Modificar</button></a>
            <a href="/jugadores" class="btn btn-outline-dark">Ver jugadores</a>
        </div>
    </div>
@endsection
    
