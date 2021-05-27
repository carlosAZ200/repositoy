@extends('layauts.base')
@section('title','Crear equipo')
@section('content')
    <h1>Crear equipo</h1>
    <form action="/equipos" method="POST" enctype="multipart/form-data">
    <!-- sin enctype="multipart/form-data" no lo recive php -->
        @csrf
        <!-- Es necesario poner la protección @csrf paraque permita correr
        y no tirer un error 439 page expired -->
        
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre') }}">
            @error('nombre')
                <small>{{ $message }}</small>
            @enderror
            <!-- @error('nombre')
                <small>{{ $message }}</small>
            @enderror
             de esta manera podemos mostrar los errores de validación de 
             un campo determinado -->
        </div>
        <div class="form-group">
            <label for="dt">D.T.</label>
            <input type="text" class="form-control" id="dt" name="dt" value="{{ old('dt') }}">
            @error('dt')
                <small>{{ $message }}</small>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="municipio">Municipio</label>
            <select class="form-control" id="municipio" name="municipio">
                @foreach($municipios as $municipio)
                    <option value="{{ $municipio->id }}">{{ $municipio->nombre }}</option>
                @endforeach
            <!-- <option value="2">Pereira</option>
            <option value="3">Armenia</option> -->
            </select>
            @error('municipio')
                <small>{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="escudo">Escudo</label>
            <input type="file" class="form-control-file" id="escudo" name="escudo">
            @error('escudo')
                <small>{{ $message }}</small>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Crear</button>
    </form>
@endsection
