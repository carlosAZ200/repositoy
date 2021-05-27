@extends('layauts.base')
@section('title','Crear municipios')
@section('content')
    <h1>Crear municipio</h1>
    <form action="/municipios" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="municipio">Municipio</label>
            <input type="text" class="form-control" id="municipio" name="municipio">
            @error('municipio')
                <small>{{ $message }}</small>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Crear</button>
    </form>
@endsection
        