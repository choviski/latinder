<?php
Route::resource('/usuario', 'UsuarioController' , ['except' => 'destroy']);
Route::delete('/usuario/remover/{id}', "UsuarioController@destroy");
Route::resource('/mensagem', 'MensagemController' , ['except' => 'destroy']);
Route::delete('/mensagem/remover/{id}', "MensagemController@destroy");
Route::resource("/cidade","CidadeController",['except'=>'destroy']);
Route::delete('/cidade/remover/{id}', "CidadeController@destroy");
Route::resource("/raca","RacaController",['except'=>'destroy']);
Route::delete('/raca/remover/{id}', "RacaController@destroy");
Route::resource("/especie","EspecieController",['except'=>'destroy']);
Route::delete('/especie/remover/{id}', "EspecieController@destroy");
Route::resource("/usuarios_has_usuarios","UsuarioHasUsuariosController",['except'=>'destroy']);
Route::delete('/usuarios_has_usuarios/remover/{id}', "UsuarioHasUsuariosController@destroy");
Route::resource("/interesse","InteresseController",['except'=>'destroy']);
Route::delete('/interesse/remover/{id}', "InteresseController@destroy");
Route::resource("/publicacao","PublicacaoController",['except'=>'destroy']);
Route::delete('/publicacao/remover/{id}', "PublicacaoController@destroy");
Route::resource("/comentario","ComentarioController",['except'=>'destroy']);
Route::delete('/comentario/remover/{id}', "ComentarioController@destroy");


Route::resource("/endereco", "EnderecoController",["except"=>"destroy"]);
Route::delete('/endereco/remover/{id}', "EnderecoController@destroy");
Route::resource("/usuarioAnimal", "UsuarioAnimalController",["except"=>"destroy"]);
Route::delete('/usuarioAnimal/remover/{id}', "UsuarioAnimalController@destroy");
Route::resource("/animal", "AnimalController",["except"=>"destroy"]);
Route::delete('/animal/remover/{id}', "AnimalController@destroy");
Route::post('/login','LoginController@entrar');


Route::get('/', "LoginController@index")->name("inicio");

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
Route::get('/gerenciar_entidades', function () {
    return view('entidades');
});


