<!-- Modal -->
<div class="modal fade" id="modalSagas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Añadir Nueva Saga</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form method="POST" action="{{ route('sagas.store') }}">
      	{{ csrf_field() }}
       <div class="modal-body">
       	<div class="row">
       		<div class="col-md-8">
       			<div class="form-group">
       				<label>Saga</label>
       				<input type="text" class="form-control" name="name" required="">
       			</div>
       		</div>
       		<div class="col-md-4">
       			<div class="form-group">
       				<label>Estado</label>
       				<select class="form-control" name="status">
       					<option value="Leyendo">Leyendo</option>
       					<option value="Leido">Leido</option>
       					<option value="Prestado">Prestado</option>
       					<option value="Perdido">Perdido</option>
       				</select>
       			</div>	
       		</div>
       	</div>

       	<div class="form-group">
       		<label>Descripción</label>
       		<textarea class="form-control" name="description" rows="5"></textarea>
       	</div>
       </div>
         <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </form>
    </div>
  </div>
</div>