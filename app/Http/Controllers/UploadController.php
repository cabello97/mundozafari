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

    public function subir_archivo(Request $request)
    {
        $file = $request->file('Archivo');
        dd($file);
        \Storage::disk('local')->put($file, \File::get($file));
    }
    public function save(Request $request)
    {
        //obtenemos el campo file definido en el formulario
        $file = $request->file('file');

        //obtenemos el nombre del archivo
        $nombre = $file->getClientOriginalName();

        //indicamos que queremos guardar un nuevo archivo en el disco local
        \Storage::disk('local')->put($nombre,  \File::get($file));

        return "archivo guardado";
    }
}
