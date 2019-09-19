@extends('layouts.app')

@section('title','Crear Usuario')

@section('content')

<div class="card shadow border border-warning p-5 mb-5" style="margin-top: 30px; width: 50rem; margin-left: 200px;">
	<div class="container">
		<div class=" col-sm text-center">
			<h2 style="margin-top: 10px;"><span class="border-bottom">Crear Grupo</span></h2>
		</div>
	</div>

@include('common.errors')
	<div class="row" style="margin-top: 2rem;">
		{!! Form::open(['route' => 'grupos.store', 'method' => 'POST', 'files' => true]) !!}
			@include('grupos.form')
			{!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
			<a href="{{ url('/grupos') }}" class="btn btn-success">Regresar</a>
		{!! Form::close() !!}
	</div>
</div>
@endsection