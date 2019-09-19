@extends('layouts.app')
@section('title','Crear Comunidad Nueva')
@section('content')
<div class="card shadow border border-warning" style="margin-top: 30px;">
@include('common.errors')
	<div class="container">
		{!! Form::open(['route' => 'comunidades.create', 'method' => 'POST', 'files' => true]) !!}

		<div class="form-group">
			{!! Form::label('name', 'Nombre de la Comunidad:') !!}
			{!! Form::text('name', null, ['class' => 'form-control', 'placeholder'=>'Su Nombre es...']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('slug', 'Escribe tu codigo:') !!}
			{!! Form::text('slug', null, ['class' => 'form-control', 'placeholder'=>'El Codigo es...']) !!}
		</div>

		<div class="form-group">
			{!! Form::file('avatar', ['id' => 'avatar', 'class' => 'file', 'data-browse-on-zone-click' => 'true']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('describir', '¿De que se tratara esta Comunidad?') !!}
			{!! Form::text('describir', null, ['class' => 'form-control', 'placeholder'=>'Se tratara de...']) !!}
		</div>

			{!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
		{!! Form::close() !!}
	</div>
</div>

@endsection