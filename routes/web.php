<?php

Route::get('/', 'HomeController@getHome');

Route::get('collection', 'CollectionController@getIndex')->middleware('auth');

Route::get('collection/show/{id}', 'CollectionController@getShow')->middleware('auth');
Route::get('collection/gallery', 'CollectionController@getGallery')->middleware('auth');


Route::get('collection/create', 'CollectionController@getCreate')->middleware('auth');
Route::post('collection/create', 'CollectionController@postCreate')->middleware('auth');

Route::get('collection/notadmin', 'CollectionController@getNotadmin')->middleware('auth');

Route::get('collection/edit/{id}', 'CollectionController@getEdit')->middleware('auth') ->middleware('admin');
Route::put('collection/edit/{id}', 'CollectionController@putEdit')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::get('upload','UploadController@index'); //Lanza la vista
Route::post('upload','UploadController@subir_archivo'); //Guarda los Archivos

Route::get('gallery', function ($archivo) {
    $public_path = public_path();
    $url = $public_path.'/storage/'.$archivo;
    //verificamos si el archivo existe y lo retornamos
    if (Storage::exists($archivo))
    {
        return response()->download($url);
    }
    //si no se encuentra lanzamos un error 404.
    abort(404);

});