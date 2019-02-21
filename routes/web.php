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
Route::post('upload','UploadController@save'); //Guarda los Archivos