<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function index()
    {
        return view('upload');
    }

    //public $arrayImagenes = array();

    public function save(Request $request)
    {
        //obtenemos el campo file definido en el formulario
        $file = $request->file('Archivo');

        //obtenemos el nombre del archivo
        $nombre = $file->getClientOriginalName();

        //indicamos que queremos guardar un nuevo archivo en el disco local
        \Storage::disk('local')->put($nombre,  \File::get($file));

        //array_push($this->arrayImagenes,$nombre);

        return redirect('/collection/gallery');
    }
}
