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

Route::resource('/usuario', 'UsuarioController' , ['except' => 'destroy']);
Route::delete('/usuario/remover/{id}', "UsuarioController@destroy");
Route::resource('/mensagem', 'MensagemController' , ['except' => 'destroy']);
Route::delete('/mensagem/remover/{id}', "MensagemController@destroy");
Route::resource("/cidade","CidadeController",['except'=>'destroy']);
Route::delete('/mensagem/remover/{id}', "CidadeController@destroy");
Route::resource("/endereco", "EnderecoController",["except"=>"destroy"]);
Route::delete('/endereco/remover/{id}', "EnderecoController@destroy");







Route::get('/', function () {
    return view('welcome');
});

Route::get('/cadastro', function () {
    return view('cadastro');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/cuidados_basicos', function () {
    return view('cuidadosbasicos');
});
Route::get('/direitos_dos_animais', function () {
    return view('direitosdosanimais');
});
Route::get('/perfil', function () {
    return view('perfilcomcadastros');
});
Route::get('/perfilInt', function () {
    return view('perfilcominteresses');
});
Route::get('/cadastraranimal', function () {
    return view('cadastroanimal');
});

