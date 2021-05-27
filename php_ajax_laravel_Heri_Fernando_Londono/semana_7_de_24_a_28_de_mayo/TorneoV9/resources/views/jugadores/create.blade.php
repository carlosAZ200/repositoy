@extends('layauts.base')
@section('title','Crear jugador')
@section('content')
    <h1>Crear jugador</h1>
    <form action="/jugadores" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre">
            @error('nombre')
                <small>{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="numero">Número</label>
            <input type="text" class="form-control" id="numero" name="numero">
            @error('numero')
                <small>{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="equipo">Equipo</label>
            <select class="form-control" id="equipo" name="equipo">
            @foreach($equipos as $equipo)
                <option value="{{ $equipo->id }}">{{ $equipo->nombre }}</option>
            @endforeach
            
            <!-- <option value="nacional">Nacional</option>
            <option value="junior">Junior</option>
            <option value="santafe">Santa fe</option> -->
            </select>
            @error('equipo')
                <small>{{ $message }}</small>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="posicion">Posición</label>
            <select class="form-control" id="posicion" name="posicion">
            @foreach($posiciones as $posicion)
                <option value="{{ $posicion->id }}">{{ $posicion->nombre }}</option>
            @endforeach
            
            <!-- <option value="delantero">Delantero</option>
            <option value="volante">Volante</option>
            <option value="defensa">Defensa</option>
            <option value="portero">Portero</option> -->
            </select>
            @error('posicion')
                <small>{{ $message }}</small>
            @enderror
            <!-- @if($errors->has('posicion'))
                <small>{{ $message }}</small>
            @endif -->
        </div>

        <div class="form-group">
            <label for="foto">Foto</label>
            <input type="file" class="form-control-file" id="foto" name="foto">
            @error('foto')
                <small>{{ $message }}</small>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Crear</button>
    </form>
@endsection
        