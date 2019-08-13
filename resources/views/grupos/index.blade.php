@extends('layouts.app')

@section('title','Usuarios')

@section('content')
	<div class="row">
		@foreach($usuarios as $registro)
			<div class="col-sn">
				<div class="card text-center border border-info" style="width: 18rem;margin-right: 40px; margin-top: 30px;">
					<img style="height: 150px; width: 100px; background-color: #EFEFEF; margin-top: 5px;" src="images/{{ $registro->avatar }}" class="card-img-top rounded-circle mx-auto d-block border border-primary" alt="">
					<div class="card-body">
					    <h5 class="card-title"> {{ $registro->name }} </h5>
					    	<p class="card-text">Jugador de Summoner Wars que lleva mucho tiempo jugando, Tiene bastante Monstruos 5 Estrella...</p>
					    <a href="{{ url('/grupos', $registro["slug"]) }}" class="btn btn-primary">Ver Más Info+</a>
					</div>
				</div>
			</div>
		@endforeach
	</div>
@endsection