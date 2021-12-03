@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">AGREGAR LIBRO</div>
				<div class="card-body">
					<form method="POST" action="{{ route('catalogo.store') }}">
						{{ csrf_field() }}
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

						<div class="form-group">
							<label>Imagen</label>
							<input type="file" name="image" class="form-control">
						</div>

						<button type="submit" class="btn btn-primary">Guardar Libro</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection