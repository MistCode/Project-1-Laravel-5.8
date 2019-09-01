@extends('layouts.app')

@section('title', 'Comunidades')

@section('content')

<div class="container">
	<div class="col-sn">
		
		<table class="table text-center" style="margin-top: 10px;">
		  <thead class="thead-light">
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
		      <td><a href="{{ url('/comunidades', $dat["slug"]) }}" class="btn btn-primary">Ver</a></td>
		    </tr>
		@endforeach 
		</div>   
		  </tbody>
		</table>
		
	</div>
</div>

@endsection