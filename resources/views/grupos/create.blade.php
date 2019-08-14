@extends('layouts.aplic')

@section('title','Crear Usuario')

@section('content')

<form class="form-group" method="POST" action="{{url('/grupos/create')}}" enctype="multipart/form-data"> 
@csrf

	<div class="form-group">
		<label for="name">Nombre:</label>
		<input type="text" name="name" class="form-control">
	</div>

	<div class="form-group">
		<label for="slug">Alias:</label>
		<input type="text" name="slug" class="form-control">
	</div>

	<div class="form-group">
		<label for="avatar">Avatar:</label>
		<input type="file" name="avatar">
	</div>
		<button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection