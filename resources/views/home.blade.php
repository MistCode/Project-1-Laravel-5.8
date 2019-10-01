@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-primary text-center" style="margin-top: 10px; margin-bottom: 10px;">
                <div class="card-header bg-transparent border-primary">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        @if(Auth::user()->hasRole('admin'))
                            <div>Acceso como administrador</div>
                        @else
                            <div>Acceso usuario</div>
                        @endif
                    <strong>¡Estás conectado!</strong>  
                    
                </div>
            </div> 
            <div class=" col-sm text-center">
            <a class="btn btn-primary" href="{{ url('/grupos/') }}">Continuar</a>
        </div>
        </div>    
    </div>
</div>
@endsection
