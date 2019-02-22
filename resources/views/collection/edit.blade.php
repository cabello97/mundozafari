@extends('layouts.master')
@section('content')
    <div class="row" style="margin-top:40px">
        <div class="offset-md-3 col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    Modificar animal
                </div>
                <div class="card-body" style="padding:30px">

                    {{-- TODO: Abrir el formulario e indicar el método POST --}}
                    <form action="" method="post">
                        {{-- TODO: Protección contra CSRF --}}
                        {{method_field('PUT')}}
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="title">Nombre</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{$animal->name}}">
                        </div>

                        <div class="form-group">
                            <label for="title">Nombre científico</label>
                            <input type="text" name="scientific" id="scientific" class="form-control" value="{{$animal->scientific}}">
                        </div>

                        <div class="form-group">
                            <label for="title">Foto</label>
                            <input type="text" name="photo" id="photo" class="form-control" value="{{$animal->photo}}">
                        </div>

                        <div class="form-group">
                            <label for="title">Descripción</label>
                            <textarea name="description" id="description" class="form-control" rows="3" maxlength="250">{{$animal->description}}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="title">Hábitat</label>
                            <input type="text" name="habitat" id="habitat" class="form-control" value="{{$animal->habitat}}">
                        </div>

                        <div class="form-group">
                            <label for="title">Región</label>
                            <input type="number" name="region" id="region" class="form-control" value="{{$animal->region->id}}" min="1" max="5">
                        </div>

                        <div class="form-group">
                            <label for="title">Alimentación</label>
                            <input type="text" name="feeding" id="feeding" class="form-control" value="{{$animal->feeding}}">
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                                Modificar animal
                            </button>
                        </div>

                        {{-- TODO: Cerrar formulario --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop