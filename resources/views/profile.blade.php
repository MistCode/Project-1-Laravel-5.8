@extends('layouts.app')
 
@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">

      @include('common.errors')
        <img width="100px" height="100px" style="margin-top: 10px;" src="{{ asset('images/ae/'.$user->avatar) }}">
        <h2>{{ $user->name }}</h2><br>
        <h4>Cambiar Avatar</h4>
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

@endsection