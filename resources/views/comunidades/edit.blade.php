@extends('layouts.app')

@section('title','Editar')

@section('content')

@include('common.errors')
{!! Form::model($dat, ['route' => ['comunidades.update', $dat], 'method' => 'PUT', 'files' => true]) !!}
	<div class="row">
		<img style="height: 230px; width: 150px; margin-top: 10px; margin-right: 20px;" src="{{asset('images/comun/'.$dat->avatar) }}" class="card-img-top rounded-circle d-block border border-primary" alt="">
		<div class="data">
			
			{!! Form::open(['route' => 'comunidades.create', 'method' => 'POST', 'files' => true]) !!}

	<div class="form-group">
		{!! Form::label('name', 'Nombre de la Comunidad:') !!}
		{!! Form::text('name', null, ['class' => 'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('slug', 'Escribe tu codigo:') !!}
		{!! Form::text('slug', null, ['class' => 'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('avatar', 'Avatar de la Comunidad') !!}
		{!! Form::file('avatar') !!}
	</div>

	<div class="form-group">
		{!! Form::label('describir', '¿De que se tratara esta Comunidad?') !!}
		{!! Form::text('describir', null, ['class' => 'form-control']) !!}
	</div>

			{!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
			<a href="{{ url('/comunidades/'.$dat->slug) }}" class="btn btn-success">Regresar</a>
		</div>
	</div>
{!! Form::close() !!}
@endsection