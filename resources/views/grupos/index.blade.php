@extends('layouts.app')

@section('title','Usuarios')

@section('content')

@include('common.success')

	<div class="container">
		<div class=" col-sm text-center">
			<h1 style="margin-top: 10px;"><span class="border-bottom">Grupos</span></h1>
		</div>
	</div>

	<a href="{{ url('/') }}" class="btn btn-success">Ir a Home</a>

	<div class="row">
		@foreach($usuarios as $ingresar)
			<div class="col-sm">
				<div class="card text-center border border-info" style="width: 18rem; margin-right: 40px; margin-top: 30px;">
					
					<img style="height: 150px; width: 100px; background-color: #EFEFEF; margin-top: 5px;" src="images/{{ $ingresar->avatar }}" class="card-img-top rounded-circle mx-auto d-block border border-primary" alt="">

					<div class="card-body">

					    <h5 class="card-title"> {{ $ingresar->name }} </h5>
					    <p class="card-text">{{ $ingresar->descript }}</p>
					    <a href="{{ url('/grupos', $ingresar["slug"]) }}" class="btn btn-primary">Ver Más Info+</a>

					</div>
				</div>
			</div>
		@endforeach	
	</div>
@endsection