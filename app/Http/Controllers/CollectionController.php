<?php

namespace App\Http\Controllers;

use App\Animal;
use Illuminate\Http\Request;
use App\Http\Requests\verificarRequest;


class CollectionController extends Controller
{
    public function getIndex()
    {

        try { 
            return	view('collection.index' ,array('animales' => Animal::all()));
         } catch (Illuminate\Database\QueryException $e) { 
            return	view('errors/Database'); 
         } 
        
    }

    public function getShow($id)
    {
        try { 
            return	view('collection.show',	['animal'=> Animal::findOrFail($id), 'id'=> $id]);
                 } catch (Illuminate\Database\QueryException $e) { 
            return	view('errors/Database'); 
         } 

        
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
        try { 
            return	view('collection.edit',	['animal'=> Animal::findOrFail($id), 'id'=> $id]);
        } catch (Illuminate\Database\QueryException $e) { 
            return	view('errors/Database'); 
         } 
        
    }

    public function getNotadmin()
    {
        return	view('collection.notadmin');
    }

    public function postCreate(verificarRequest $request)
    {
        try {

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

        } catch (\Illuminate\Database\QueryException $e) { 
            return	view('errors/Database'); 
         } 

        

    }

    public function putEdit(verificarRequest $request){
        try { 

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

        } catch (\Illuminate\Database\QueryException $e) { 
            return	view('errors/Database'); 
         } 

        return redirect('/collection');
    }



}
