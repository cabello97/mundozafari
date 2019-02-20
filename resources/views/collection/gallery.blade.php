@extends('layouts.master')
@section('content')
    <h2>Upload de Archivos en Laravel</h2>
    <form method="post" id="frm" url="upload" files="true" enctype="multipart/form-data">
        {{ csrf_field() }}
        <label for="Archivo"><b>Archivo: </b></label><input type="file" name="Archivo" required>
        <input type="submit" value="Enviar" >
    </form>
@stop