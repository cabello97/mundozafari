<?php

namespace App\Http\Controllers;

use App\Animal;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function getIndex()
    {
        return	view('collection.index' ,array('animales' => Animal::all()));
    }

    public function getShow($id)
    {
        return	view('collection.show',	['animal'=> Animal::findOrFail($id), 'id'=> $id]);
    }

    public function getGallery()
    {
        return	view('collection.gallery');
    }

    public function getCreate()
    {
        return	view('collection.create');
    }

    public function getEdit($id)
    {
        return	view('collection.edit',	['animal'=> Animal::findOrFail($id), 'id'=> $id]);
    }

    public function getNotadmin()
    {
        return	view('collection.notadmin');
    }

    public function postCreate(Request $request)
    {
        $animal = new Animal();
        if(!empty($animal)){
            if(!empty($request['name'])){
                $animal->name = $request['name'];
            }
            if(!empty($request['scientific'])){
                $animal->scientific = $request['scientific'];
            }
            if(!empty($request['photo'])){
                $animal->photo = $request['photo'];
            }
            if(!empty($request['description'])){
                $animal->description = $request['description'];
            }
            if(!empty($request['habitat'])){
                $animal->habitat = $request['habitat'];
            }
            if(!empty($request['region'])){
                $animal->region_id = $request['region'];
            }
            if(!empty($request['feeding'])){
                $animal->feeding = $request['feeding'];
            }
            $animal->danger=0;
        }
        $animal->save();

        return redirect('/collection');
    }

    public function putEdit(Request $request){
        $animal = Animal::findOrFail($request['id']);
        if(!empty($animal)){
            if(!empty($request['name'])){
                $animal->name = $request['name'];
            }
            if(!empty($request['scientific'])){
                $animal->scientific = $request['scientific'];
            }
            if(!empty($request['photo'])){
                $animal->photo = $request['photo'];
            }
            if(!empty($request['description'])){
                $animal->description = $request['description'];
            }
            if(!empty($request['habitat'])){
                $animal->habitat = $request['habitat'];
            }
            if(!empty($request['region'])){
                $animal->region_id = $request['region'];
            }
            if(!empty($request['feeding'])){
                $animal->feeding = $request['feeding'];
            }
            $animal->danger=0;
        }
        $animal->save();

        return redirect('/collection');
    }



}
