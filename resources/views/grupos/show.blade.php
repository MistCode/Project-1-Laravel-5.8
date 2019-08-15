@extends('layouts.aplic')

@section('title','Usuario - Info')

@section('content')

	@if($mostrar->avatar != null)
		<img style="height: 150px; width: 100px; margin-top: 5px;" src="{{asset('images/'.$mostrar->avatar) }}" class="card-img-top rounded-circle mx-auto d-block border border-primary" alt="">
	@endif


			<div class="text-center">

				<h5 class="card-title"> {{ $mostrar->name }} </h5>
				<p class="card-text">Jugador de Summoner Wars que lleva mucho tiempo jugando, Tiene bastante Monstruos 5 Estrellas y cuando el Primer 5 Estrellas fue Seara, la Oraculo de Viento ¨Sin Despertar¨</p>
			<a href="{{ url('/grupos', $mostrar->slug,'/edit') }}" class="btn btn-primary">Editar</a>

		</div>

@endsection