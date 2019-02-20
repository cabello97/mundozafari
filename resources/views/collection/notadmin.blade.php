@extends('layouts.master')
@section('content')
    <div>
        <h2>Hemos detectado que no eres Administrador por lo que no tienes permitido editar.</h2>
        <a class="btn btn-light" href="{{ url('collection')}}	" role="button"><img src="https://image.flaticon.com/icons/svg/159/159769.svg" style="height:20px"/> Volver al listado</a>
    </div>

@stop