<?php

use Illuminate\Http\Request;

Route::get('api/collection', 'APICollectionController@index');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
