@extends('layouts.app')

@section('content')
<div class="card-body">
    <h5 class="card-title">Eliminar un libro</h5>
    <p>¿Estás seguro de que deseas eliminar el siguiente libro?</p>

    <form method="POST" action="{{ route('libro.destroy', $libro->id) }}">
        @csrf
        @method('DELETE')

        <div class="form-group">
            <label for="nombre">Nombre del libro:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $libro->nombre }}" disabled>
        </div>
        
        <div class="form-group">
            <label for="autor">Autor:</label>
            <input type="text" class="form-control" id="autor" name="autor" value="{{ $libro->autor }}" disabled>
        </div>

        <button type="submit" class="btn btn-danger mt-3">Eliminar</button>
    </form>

    @if(session('success'))
    <div class="alert alert-success mt-3" role="alert">
        {{ session('success') }}
    </div>
    @endif
</div>
@endsection
