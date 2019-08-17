@extends('layouts.aplic')

@section('title','Editar')

@section('content')

{!! Form::model($mostrar, ['route' => ['grupos.update', $mostrar], 'method' => 'PUT', 'files' => true]) !!}

<div class="row">
				<img style="height: 200px; width: 150px; margin-top: 10px; margin-right: 20px;" src="{{asset('images/'.$mostrar->avatar) }}" class="card-img-top rounded-circle d-block border border-primary" alt="">
			<div class="data">

		@include('grupos.form')

		{!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
		</div>
		</div>

{!! Form::close() !!}

@endsection