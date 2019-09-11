@extends('layouts.app')

@section('title','Perfil')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2" style="margin-top: 70px; margin-left: 70px;">

      @include('common.errors')
      <div class="row no-gutters">
    <div class="col-md-3">
        <img width="100px" height="100px" style="margin-top: 10px;" src="{{ asset('images/ae/'.$user->avatar) }}">
        <h2 style="margin-top: 10px;">{{ $user->name }}</h2><br>
    </div>
      <div class="col-md-7">  
        <h2 style="margin-top: 10px; margin-bottom: 20px;">Cambiar Avatar</h2>
          {{ Form::open(['route' => ['user.profile.update'], 'files' => true, 'method' => 'PATCH']) }}
            <div class="form-group">
              {{ Form::file('avatar') }}
            </div>
            {{ Form::submit('Actualizar', ['class' => 'btn btn-primary'] , ['name' => 'submit']) }}
            <a href="{{ url('/grupos') }}" class="btn btn-success">Regresar</a>
          {{ Form::close() }}
      </div>
    </div>
  </div>
  </div>
</div>

@endsection