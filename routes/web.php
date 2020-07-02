<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/bienvenidos', 'PublicationController@listPublications');

Route::get('/subir/imagenes', function(){
    return view('subirImagenes');
});
Route::post('/subir/imagenes', 'PublicationController@createPublication');


Route::get('/perfil', 'UserController@profile');

Route::get('/perfil/editar', 'UserController@editProfile');

Auth::routes();
