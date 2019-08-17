@extends('layouts.aplic')

@section('title','Crear Usuario')

@section('content')

	@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach				
			</ul>
		</div>
	@endif
	{!! Form::open(['route' => 'grupos.store', 'method' => 'POST', 'files' => true]) !!}
		
		@include('grupos.form')

		{!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}

	{!! Form::close() !!}

@endsection