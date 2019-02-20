@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-sm-4">
            <img src="{{$animal->photo}}" style="height:400px; width: 350px"/>
        </div>
        <div class="col-sm-8">
            <h3>{{$animal->name}}</h3>
            <p><big><b>Nombre científico:</b></big> {{$animal->scientific}}</p>
            <p><big><b>Hábitat:</b></big> {{$animal->habitat}}</p>
            <p><big><b>Región:</b></big> {{$animal->region['name']}}</p>
            <p><big><b>Alimentación:</b></big> {{$animal->feeding}}</p>
            <p><big><b>Descripción:</b></big></p><p> {{$animal->description}}</p>
            <p><big><b>Estado de peligro:</b></big> {{$animal->danger ? "Animal en peligro de extinción." : "Animal fuera de peligro de extinción."}}</p>
            <p>
                @if ($animal->danger)
                    <button type="button" class="btn btn-danger"><img src="https://image.flaticon.com/icons/svg/134/134566.svg" style="height:20px"/> Añadir a especie en peligro</button>
                @else
                    <button type="button" class="btn btn-success"><img src="https://image.flaticon.com/icons/svg/134/134565.svg" style="height:20px"/> Salvar especie</button>
                @endif
                    <a class="btn btn-warning" href="{{ action('CollectionController@getEdit',	['id'=>$id])}}" role="button"><img src="https://image.flaticon.com/icons/svg/1159/1159633.svg" style="height:20px"/> Editar animal</a>
                    <a class="btn btn-light" href="{{ url('collection')}}	" role="button"><img src="https://image.flaticon.com/icons/svg/159/159769.svg" style="height:20px"/> Volver al listado</a>
            </p>
        </div>
    </div>
@stop