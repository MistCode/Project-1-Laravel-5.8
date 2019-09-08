@extends('layouts.app')

@section('title','Usuario - Info')

@section('content')

	<div class="container">
		<div class=" col-sm text-center">
			<h2 style="margin-top: 10px;"><span class="border-bottom">Ver Información de {{ $mostrar->slug }}</span></h2>
		</div>
	</div>

@include('common.success')

<img style="height: 230px; width: 150px; margin-top: 5px;" src="{{asset('images/'.$mostrar->avatar) }}" class="card-img-top rounded-circle mx-auto d-block border border-primary" alt="">
	<div class="text-center">
		<h5 class="card-title"> {{ $mostrar->name }} </h5>
		<p class="card-text">{{ $mostrar->descript }}</p>
		<div class="row" style="justify-content: center;">
			{!! Form::open([ 'route' => ['grupos.destroy', $mostrar->id], 'method' => 'DELETE' ]) !!}
				<a href="{{ url('/grupos/'.$mostrar->slug.'/edit') }}" class="btn btn-primary">Editar</a>
				{!! Form::submit('Eliminar', [ 'class' => 'btn btn-danger']) !!}
				<a href="{{ url('/grupos') }}" class="btn btn-success">Regresar</a>
			{!! Form::close() !!}
		</div>
	</div>
		<div class="container">
		<div class=" col-sm text-center">
			<h2><span class="border-bottom">Personas del Grupo {{ $mostrar->slug }}</span></h2>
		</div>
	</div>
	<modal-button></modal-button>
	<create-form-person></create-form-person>
	<lista-de-personas></lista-de-personas>
@endsection