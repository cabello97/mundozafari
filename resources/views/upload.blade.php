@extends('layouts.master')
@section('content')
    <h2>Subir un archivo</h2>

    <div class="container">

        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form method="POST" action=""  accept-charset="UTF-8" files="true" enctype="multipart/form-data">

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            {{method_field('PUT')}}


                            <div class="form-group">
                                <div class="col-md-6">
                                    <input type="file" class="form-control" name="Archivo" >
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">Enviar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop