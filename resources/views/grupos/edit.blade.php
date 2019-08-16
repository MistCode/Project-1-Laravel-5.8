@extends('layouts.aplic')

@section('title','Editar')

@section('content')

<form class="form-group" method="POST" action="{{ url('/grupos/'.$mostrar->slug) }}" enctype="multipart/form-data">
@method('PUT')
@csrf
			<div class="row">
				<img style="height: 200px; width: 150px; margin-top: 10px; margin-right: 20px;" src="{{asset('images/'.$mostrar->avatar) }}" class="card-img-top rounded-circle d-block border border-primary" alt="">
			<div class="data">
				<div class="form-group">
					<label for="">Nombre:</label>
					<input type="text" name="name" value="{{ $mostrar->name }}"class="form-control">
				</div>

				<div class="form-group">
					<label for="">Alias:</label>
					<input type="text" name="slug" value="{{ $mostrar->slug }}" class="form-control">
				</div>

				<div class="form-group">
					<label for="">Avatar:</label>
					<input type="file" name="avatar">
				</div>
			<button type="submit" class="btn btn-primary">Actualizar</button>
		</div>
		</div>
    </form>
@endsection