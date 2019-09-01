@extends('layouts.app')
@section('title','Crear Comunidad Nueva')
@section('content')

@include('common.errors')
<div class="container">
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

		{!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
	{!! Form::close() !!}
</div>

@endsection