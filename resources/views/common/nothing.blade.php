@extends('layouts.app')

@section('title','Usuarios')

@section('content')

@include('common.success')

	<div class="container">

	<a href="{{ url('/') }}" class="btn btn-success">Ir a Home</a>

		<div class="card-body text-center">
			<h1>No Hay Grupos Creados, Empieza a Añadirlos...XD</h1>
		</div>

	</div>
@endsection