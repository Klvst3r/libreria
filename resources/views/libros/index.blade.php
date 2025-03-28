@extends('layouts.app')

@section('content')
    <h1>Inicio</h1>

    <h1>Listado de Libros</h1>

    <!-- Mostrar mensaje de éxito si existe -->
    @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{-- Capturamos el valor de la sesión y lo mostramos --}}
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombres</th>
                <th scope="col">Descripción</th>
                <th scope="col">Autor</th>
                <th scope="col">Acciones</th>
            </tr>
            <div class="row">
                    
        </thead>
        <tbody>
            @foreach ($libros as $libro)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $libro->nombre }}</td>
                    <td>{{ $libro->descripcion }}</td>
                    <td>{{ $libro->autor }}</td>
                    <td class="col-24 d-flex justify-content-center">
                        <button type="submit" class="btn btn-success mt-3"
                            data-bs-toggle="modal" data-bs-target="#modal{{ $libro->id }}">Actualizar
                        </button>
                        <div class="ms-3">
                        <a href="{{ route('libros.delete', $libro->id) }}" class="btn btn-danger mt-3">eliminar</a>
                        </div>
                        


                    </td>
                    @include('libros.edit') 
                </tr>
                
            @endforeach
        </tbody>
    </table>
@endsection

