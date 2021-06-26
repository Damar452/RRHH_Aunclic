<?php

use Illuminate\Support\Facades\Route;

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
Route::group(['middleware' => ['guest']], function () {
    Route::get('/','Auth\LoginController@showLoginForm'); 
    Route::post('/login', 'Auth\LoginController@login')->name('login');
});

Route::get('/principal', 'PrincipalController@index')->name('principal');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');


Route::group(['middleware' => ['admin']], function () {
Route::get('usuario/crear', 'UserController@ShowCreate');
Route::post('usuario/crear', 'UserController@Create');
Route::get('usuario/todos', 'UserController@Todos');
Route::get('usuario/{user}/editar', 'UserController@Editar');
Route::put('usuario/{user}', 'UserController@Actualizar');
Route::delete('usuario/{user}', 'UserController@Eliminar');
});

Route::get('tipodocumento', 'TipodocumentoController@Create')->name('tipodocumento');

Route::get('posesion/crear', 'PosesionController@ShowCreate');
Route::post('posesion/crear', 'PosesionController@Create');
Route::get('posesion/todos', 'PosesionController@Todos');


Route::get('/departamentos', 'PosesionController@getDepartamento');
Route::get('/municipios', 'PosesionController@getMunicipio');
Route::get('/gvarios', 'PosesionController@postvarios');


Route::get('departamentoPais/{id}', 'PosesionController@byPais');
 Route::get('/pdfPosesion/{id}', 'PosesionController@pdf')->name('posesion_pdf');
 Route::get('/pdfTalento/{id}', 'PosesionController@pdfT')->name('talento_pdf');
Route::get('posesiones/{id}', function ($id) {
    
    $posesiones = $user->Posesiones()->get();

});



