<!-- Modal -->
<!-- <div class="modal fade" id="modal{{ $libro->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">  -->


<div class="modal fade" id="modal{{ $libro->id }}" tabindex="-1" aria-labelledby="modal{{ $libro->id }}Label" aria-hidden="true">  
  <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Actualizar Libro</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            
          <div class="card-body">

                <form method="POST" action="{{ route('libros.update', $libro->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nombre">Nombre: </label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $libro->nombre }}" required>
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripción: </label>
                        <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{ $libro->descripcion }}" required>
                    </div>
                    <div class="form-group">
                        <label for="autor">Autor: </label>
                        <input type="text" class="form-control" id="autor" name="autor" value="{{ $libro->autor }}" required>
                    </div>
                    <button type="submit" class="form-control btn btn-success mt-3">Actualizar</button>
                </form>
                

        </div>
        <div class="modal-footer">
        </div>
          
          
        </div>
      </div>
    </div>
  </div>