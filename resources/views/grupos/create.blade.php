@extends('layouts.app')

@section('title','Crear Usuario')

@section('content')

@include('common.errors')

	{!! Form::open(['route' => 'grupos.store', 'method' => 'POST', 'files' => true]) !!}
		
		@include('grupos.form')

		{!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}

	{!! Form::close() !!}

	<a href="{{ url('/grupos') }}" class="btn btn-success">Regresar</a>

@endsection