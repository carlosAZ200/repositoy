@extends('layauts.base')
@section('title','Crear posiciones')
@section('content')
    <h1>Crear posición</h1>
    <form action="/posiciones" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="posicion">Posición</label>
            <input type="text" class="form-control" id="posicion" name="posicion">
            @error('posicion')
                <small>{{ $message }}</small>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Crear</button>
    </form>
@endsection
