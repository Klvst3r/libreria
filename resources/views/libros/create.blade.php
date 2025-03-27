@extends('layouts.app')


@section('content')




    <h1>Formulario de Registro</h1>


    @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{-- capturamos el valor de la sesion --}}
            {{ session('success') }}
        </div>
        @endif


    <div class="card-body">
    <h5 class="card-title">Añadir un libro</h5>

    <form action="{{ route('libros.store') }}" method="POST">
    @csrf    

        <div class="row">
            <!-- Formulario ocupa 6 columnas en pantallas medianas y mayores -->
            <div class="col-12 col-md-6 offset-md-3"> <!-- 8 columnas con un margen de 2 en cada lado -->
                <!-- Formulario de entrada -->
                <div class="form-group">
                    <label for="nombre">Nombre: </label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>

                <div class="form-group">
                    <label for="descripcion">Descripción: </label>
                    <input type="text" class="form-control" id="descripcion" name="descripcion" >
                </div>

                <div class="form-group">
                    <label for="autor">Autor: </label>
                    <input type="text" class="form-control" id="autor" name="autor" required>
                </div>

                <!-- Botón de guardar centrado -->
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <button type="submit" class="btn btn-success mt-3">Guardar</button>
                    </div>
                </div>
            </div>
        </div>

    </form>


    </div>

@endsection

