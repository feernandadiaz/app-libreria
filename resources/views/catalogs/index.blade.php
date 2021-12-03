@extends('layouts.app')

@section('content')
<div class="container">
 <div class="row">
	<div class="col-md-12 text-right">
		<a href="" class="btn btn-primary" data-toggle="modal" data-target="#modalSagas">Añadir Nueva Saga</a>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<h4>Mis Sagas</h4>
		<hr>
	</div>
	@foreach($catalogs as $catalog)
	<div class="col-md-4">
		@include('catalogs.utilities._catalog_card')
	</div>
	@endforeach
 </div>
</div>

@include('catalogs.utilities._create_modal')

@endsection