@extends('layouts.app')

@section('title','Usuario - Info')

@section('content')
		<img style="height: 150px; width: 100px; margin-top: 5px;" src="images/{{ $registro->avatar }}" class="card-img-top rounded-circle mx-auto d-block border border-primary" alt="">
			<div class="text-center">
				<h5 class="card-title"> {{ $registro->name }} </h5>
					<p class="card-text">Jugador de Summoner Wars que lleva mucho tiempo jugando, Tiene bastante Monstruos 5 Estrellas y cuando el Primer 5 Estrellas fue Seara, la Oraculo de Viento ¨Sin Despertar¨</p>
			</div>
@endsection