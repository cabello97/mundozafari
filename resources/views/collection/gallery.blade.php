@extends('layouts.master')
@section('content')
    <h2>Imagenes subidas</h2>

    <div class="row">
    @for ($i = 0; $i <=5; $i++)
            <div class="col-xs-6 col-sm-4 col-md-3 text-center">
                    <a href="../uploads/{{$i}}.jpg"><img src="../uploads/{{$i}}.jpg" style="height:200px; width:200px; margin-bottom: 34px"/></a>
            </div>
        @endfor
    </div>
@stop