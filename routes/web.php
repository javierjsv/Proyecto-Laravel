<?php



Route::get('/', function () {
    return view('welcome');
});


//mostar cadena de texto
Route::get('/Usuarios','UserController@index');

//,mostrar el id de usuarios



Route::get('/Usuarios/detalles/{id}', 'UserController@show')->where('id','[0-9]+');

route::get('/Usuarios/nuevos','UserController@create'); 	

Route::get('saludo/{name}/{nickname?}','WelcomeUserController');