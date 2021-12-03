<div class="card mb-3">
     @if($catalog->status == 'Leyendo')
     <div class="text-white px-2 text-center bg-info">{{ $catalog->status }}</div>
     @endif

     @if($catalog->status == 'Leido')
     <div class="text-white px-2 text-center bg-success">{{ $catalog->status }}</div>
     @endif

     @if($catalog->status == 'Prestado')
     <div class="text-white px-2 text-center bg-warning">{{ $catalog->status }}</div>
     @endif

     @if($catalog->status == 'Perdido')
     <div class="text-white px-2 text-center bg-danger">{{ $catalog->status }}</div>
     @endif

     <div class="card-body">
     	<h5>{{ $catalog->name }}</h5>
        <p>{{ $catalog->description }}</p>
        <hr>
        <a href="" data-toggle="modal" data-target="#modalCreateTask_{{ $catalog->id }}" class="btn btn-outline-dark btn-sm mb-3">Agregar Libro</a>

        @foreach($catalog->tasks as $task)
        <div class="d-flex align-items-center justify-content-between">
           <div style="width:60%;">
              <p class="mb-0">{{ $task->title }}</p>
              <p>Publicado: {{ $task->deadline }}</p>
              @if($task->is_complete == false)
              <span class="badge badge-warning">Por comprar</span>
              @else
              <span class="badge badge-success">Conseguido</span>
              @endif
           </div>

           <div>
              @if($task->is_complete == false)
                            <a href="{{ route('catalogo.status', $task->id) }}" class="btn btn-outline-success btn-sm" data-toggle data-toggle="tooltip" data-placement="top" title="Conseguir"><ion-icon name="checkmark-outline"></ion-icon></a>
                            @endif
                            <a href="{{ route('catalogo.edit', $task->id) }}" class="btn btn-outline-info btn-sm" data-toggle="tooltip" data-placement="top" title="Editar"><ion-icon name="create-outline"></ion-icon></a>
                            
                            <form method="POST" style="display: inline-block;" action="{{ route('catalogo.destroy', $task->id) }}">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" data-toggle="tooltip" data-placement="top" title="Borrar" class="btn btn-danger btn-sm"><ion-icon name="trash-outline"></ion-icon></button>
                            </form>
           </div>
        </div>
        <p>{{ $task->description }}</p>
        @endforeach
        <hr>
     </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalCreateTask_{{ $catalog->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Libro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

         <form method="POST" action="{{ route('catalogo.store') }}">
            <div class="modal-body">
                  {{ csrf_field() }}

                  <input type="hidden" name="source" value="sagas" readonly="">
                  <input type="hidden" name="catalog_id" value="{{ $catalog->id }}" readonly="">

                  <div class="form-group">
                     <label>Titulo del Libro</label>
                     <input type="text" name="title" class="form-control">
                  </div>

                  <div class="form-group">
                     <label>Fecha de Publicación</label>
                     <input type="date" name="deadline" class="form-control">
                  </div>

                  <div class="form-group">
                     <label>Descripción</label>
                     <textarea class="form-control" name="description" rows="5"></textarea>
                  </div>
            </div>

            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
               <button type="submit" class="btn btn-primary">Guardar Libro</button>
            </div>
      </form>
    </div>
  </div>
</div>