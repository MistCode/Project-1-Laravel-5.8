@extends('layouts.app')

@section('title','Editar')

@section('content')

	<div class="container">
		<div class=" col-sm text-center">
			<h2 style="margin-top: 10px;"><span class="border-bottom">Editar Información de {{ $mostrar->slug }}</span></h2>
		</div>
	</div>

@include('common.errors')

{!! Form::model($mostrar, ['route' => ['grupos.update', $mostrar], 'method' => 'PUT', 'files' => true]) !!}
	<div class="row">
		<img style="height: 230px; width: 150px; margin-top: 10px; margin-right: 20px;" src="{{asset('images/'.$mostrar->avatar) }}" class="card-img-top rounded-circle d-block border border-primary" alt="">
		<div class="data">
			@include('grupos.form')
			{!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
			<a href="{{ url('/grupos/'.$mostrar->slug) }}" class="btn btn-success">Regresar</a>
		</div>
	</div>
{!! Form::close() !!}
@endsection