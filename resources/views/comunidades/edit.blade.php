@extends('layouts.app')

@section('title','Editar')

@section('content')
<div class="card shadow border border-warning" style="margin-top: 30px;">
	<div class="container">
@include('common.errors')
		{!! Form::model($dat, ['route' => ['comunidades.update', $dat], 'method' => 'PUT', 'files' => true]) !!}
			<div class="row">
				<img style="height: 230px; width: 150px; margin-top: 10px; margin-right: 20px; margin-left: 30px;" src="{{asset('images/comun/'.$dat->avatar) }}" class="card-img-top rounded-circle d-block border border-primary" alt="">
				<div class="data">
					
					{!! Form::open(['route' => 'comunidades.create', 'method' => 'POST', 'files' => true]) !!}

			<div class="form-group">
				{!! Form::label('name', 'Nombre de la Comunidad:') !!}
				{!! Form::text('name', null, ['class' => 'form-control']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('slug', 'Escribe tu codigo:') !!}
				{!! Form::text('slug', null, ['class' => 'form-control']) !!}
			</div>

			<div class="form-group">
				{!! Form::file('avatar', ['id' => 'avatar', 'class' => 'file', 'data-browse-on-zone-click' => 'true']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('describir', '¿De que se tratara esta Comunidad?') !!}
				{!! Form::text('describir', null, ['class' => 'form-control']) !!}
			</div>

					{!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
					<a href="{{ url('/comunidades/'.$dat->slug) }}" class="btn btn-success"><i class="fas fa-arrow-left"></i> Regresar</a>
				</div>
			</div>
		{!! Form::close() !!}
	</div>
</div>
@endsection