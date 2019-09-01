@extends('layouts.app')
@section('title','Mostrando Información')
@section('content')


	<div class="row">
		<ul>
			<div class="card text-center bg-white rounded border border-info" style="width: 18rem; margin-right: 20px; margin-top: 30px;">
					
				<img style="height: 150px; width: 100px; background-color: #EFEFEF; margin-top: 5px;" src="{{asset('images/comun/'.$dat->avatar) }}" class="card-img-top mx-auto d-block border border-primary" alt="">

				<div class="card-body">

				    <h5 class="card-title"> {{ $dat->name }} </h5>
				    <p class="card-text">{{ $dat->describir }}</p>
				    {!! Form::open([ 'route' => ['comunidades.destroy', $dat->id], 'method' => 'DELETE' ]) !!}
						<a href="{{ url('/comunidades/'.$dat->slug.'/edit')}}" class="btn btn-primary">Editar</a>
						{!! Form::submit('Eliminar', [ 'class' => 'btn btn-danger']) !!}
					{!! Form::close() !!}
				</div>
			</div>
		</ul>

		<ul>
			<table class="table" style="margin-top: 30px;">
				<thead class="thead-dark">
				    <tr>
				    	<th scope="col">Asunto</th>
				    	<th scope="col">Contenido</th>
				    </tr>
				</thead>
				<tbody>
				    <tr>
				    	<th scope="row">Falta Vue.js</th>
				    	<td>Falta Vue.js</td>
				    </tr>
				</tbody>
			</table>
		</ul>	
	</div>

	

@endsection