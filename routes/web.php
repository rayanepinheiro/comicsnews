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
Route::get('index', 'NoticiasController@index');
Route::get('detalhes/{id}', 'NoticiasController@detalhes');
Route::get('cadastrar', 'NoticiasController@cadastrar');
Route::post('cadastrar', 'NoticiasController@validar');

use App\Classes\DBQuery;

// Route::get('test', function () {
    // return DBQuery::setPostagens('teste titulo','teste descricao','teste imagem','teste autor');
    // return DBQuery::getPostagens();
// });
