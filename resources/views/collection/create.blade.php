@extends('layouts.master')
@section('content')
    <div class="row" style="margin-top:40px">
        <div class="offset-md-3 col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    Añadir animal
                </div>
                <div class="card-body" style="padding:30px">

                    <form action="" method="post">
                    {{-- TODO: Protección contra CSRF --}}
                    {{csrf_field()}}
                    
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="title">Nombre</label>
                            <input required type="text" name="name" id="name" class="form-control">
                        </div>

                        <div class="form-group{{ $errors->has('scientific') ? ' has-error' : '' }}">
                            <label for="title">Nombre científico</label>
                            <input required type="text" name="scientific" id="scientific" class="form-control">
                        </div>

                        <div class="form-group{{ $errors->has('photo') ? ' has-error' : '' }}">
                            <label for="title">Foto</label>
                            <input required type="text" name="photo" id="photo" class="form-control">
                        </div>

                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="title">Descripción</label>
                            <textarea required name="description" id="description" class="form-control" rows="3" maxlength="250"></textarea>
                        </div>

                        <div class="form-group{{ $errors->has('habitat') ? ' has-error' : '' }}">
                            <label for="title">Hábitat</label>
                            <input required type="text" name="habitat" id="habitat" class="form-control">
                        </div>

                        <div class="form-group{{ $errors->has('region') ? ' has-error' : '' }}">
                            <label for="title">Región</label>
                            <select name="region" id="region" class="form-control">
                                <option value="1">Sabana</option>
                                <option value="2">Bosque</option>
                                <option value="3">Desierto</option>
                                <option value="4">Tundra</option>
                                <option value="5">Selva</option>
                            </select>
                        </div>

                        <div class="form-group{{ $errors->has('feeding') ? ' has-error' : '' }}">
                            <label for="title">Alimentación</label>
                            <input required type="text" name="feeding" id="feeding" class="form-control">
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                                Añadir animal
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

@stop