@extends('layouts.app')

@section('title','Crear Usuario')

@section('content')

@include('common.errors')

	{!! Form::open(['route' => 'grupos.store', 'method' => 'POST', 'files' => true]) !!}
		
		@include('grupos.form')

		{!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}

	{!! Form::close() !!}

@endsection