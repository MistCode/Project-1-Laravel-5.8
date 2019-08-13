@extends('layouts.app')

@section('title','Crear Usuario')

@section('content')
<form class="form-group" method="POST" action="{{url('/grupos/create')}}" enctype="multipart/form-data"> 
@csrf	
	<div class="form-group">
	<label for="">Nombre:</label><br>
		<input type="text" name="name" class="form-control">
	</div>

	<div class="form-group">
		<input type="file" name="avatar">
	</div>
		<button type="submit" class="btn btn-primary">Guardar</button>
		<a href="{{ url('/grupos') }}" class="btn btn-danger">Volver</a>
    </form>
@endsection