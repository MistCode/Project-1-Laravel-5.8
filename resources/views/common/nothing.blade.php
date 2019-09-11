@extends('layouts.app')

@section('title','Grupos')

@section('content')

@include('common.success')

	<div class="container">
		<div class="card text-center shadow bg-white rounded border border-info" style="width: 50rem; margin-left: 160px; margin-top: 140px;">
			<div class="row no-gutters">
    <div class="col-md-4">
      <img src="{{ asset('images/grupos-imagen.jpg') }}" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
		<div class="card-body">
			<br><h1>No Hay Grupos Creados</h1>
			<h1>Empieza a <a href="{{ url('/grupos/create') }}">Añadirlos</a></h1>
		</div>
		</div>
		</div>
	</div>
@endsection