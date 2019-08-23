@extends('layouts.app')

@section('title','Crear Usuario')

@section('content')

@include('common.errors')
<div class="row" style="margin-top: 2rem;">
	{!! Form::open(['route' => 'grupos.store', 'method' => 'POST', 'files' => true]) !!}
		@include('grupos.form')
		{!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
		<a href="{{ url('/grupos') }}" class="btn btn-success">Regresar</a>
	{!! Form::close() !!}
</div>
@endsection