@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">EDITAR LIBRO</div>
				<div class="card-body">
					<form method="POST" action="{{ route('catalogo.update', $task->id) }}">
						{{ csrf_field() }}
						{{ method_field('PUT') }}
						
						<div class="form-group">
							<label>Titulo del libro</label>
							<input type="text" name="title" class="form-control" value="{{ $task->title }}" required="">
						</div>

						<div class="form-group">
							<label>Fecha de publicación</label>
							<input type="date" name="deadline" value="{{ $task->deadline }}" class="form-control">
						</div>

						<div class="form-group">
							<label>Descripción</label>
							<textarea class="form-control" name="description" rows="5">{{ $task->description }}</textarea>
						</div>

						<button type="submit" class="btn btn-primary">Actualizar libro en la base de datos</button>

						<a href="{{ route('catalogo.index') }}" class="btn btn-outline-dark">Cancelar</a>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection