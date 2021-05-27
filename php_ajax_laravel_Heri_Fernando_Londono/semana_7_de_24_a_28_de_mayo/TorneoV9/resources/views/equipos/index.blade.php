@extends('layauts.base')
@section('title','Equipos')
@section('content')
    @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <h1>Listado de equipo</h1>
    <div class="row">
        @foreach ($equipos as $equipo)
            <div class="col-3 text-center">
                <a href="/equipos/{{ $equipo->id }}">
                    <img src="{{ asset('images/equipos/'. $equipo->escudo) }}" class="rounded" style="width:100%">
                    <h4>{{ $equipo->nombre }}</h4>
                </a>
            </div>
        @endforeach
    </div>
@endsection


    

    
