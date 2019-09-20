@extends('layouts.app')

@section('title', 'Comunidades')

@section('content')

<div class="container">
	<div class="col-sn">
		
		<table class="table table-hover text-center shadow p-3 mb-5" style="margin-top: 10px;">
		  <thead class="thead-dark">
		    <tr>
		      <th scope="col">Imagen</th>
		      <th scope="col">Nombre</th>
		      <th scope="col">Descripción</th>
		      <th scope="col">Opción</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<div class="row">
		@foreach($usuarios as $dat)  	
		    <tr>
		      <th scope="row"><img style="height: 100px; width: 75px; background-color: #EFEFEF; margin-top: 5px;" src="images/comun/{{ $dat->avatar }}" class="card-img d-block border border-primary" alt=""></th>

		      <td>{{ $dat->name }}</td>
		      <td>{{ $dat->describir }}</td>
		      <td><a href="{{ url('/comunidades', $dat["slug"]) }}" class="btn btn-primary">Ver <i class="fas fa-plus-circle"></i></a></td>
		    </tr>
		@endforeach 
		</div>   
		  </tbody>
		</table>
		
	</div>
</div>

@endsection