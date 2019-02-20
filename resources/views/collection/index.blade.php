@extends('layouts.master')
@section('content')
    <div class="row">
        @foreach( $animales as $animal )
            <div class="col-xs-6 col-sm-4 col-md-3 text-center">
                <a href="{{ url('/collection/show/' . $animal->id ) }}">
                    <img src="{{$animal->photo}}" style="height:200px; width:200px;"/>
                    <h4 style="min-height:45px;margin:5px 0 10px 0">
                        {{$animal->name}}
                    </h4>
                </a>
            </div>
        @endforeach
    </div>

@stop