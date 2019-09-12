<?php
use App\Http\Middleware\CheckAdm;

Route::resource('/usuario', 'UsuarioController' , ['except' => 'destroy','create','store'])->middleware(CheckAdm::class);
Route::delete('/usuario/remover/{id}', "UsuarioController@destroy")->middleware(CheckAdm::class);
Route::get('/usuario/create', "UsuarioController@create")->name("cadastroUsuario");
Route::post('/usuario', "UsuarioController@store")->name("storeUsuario");
Route::resource('/mensagem', 'MensagemController' , ['except' => 'destroy'])->middleware(CheckAdm::class);
Route::delete('/mensagem/remover/{id}', "MensagemController@destroy")->middleware(CheckAdm::class);
Route::resource("/cidade","CidadeController",['except'=>'destroy'])->middleware(CheckAdm::class);
Route::delete('/cidade/remover/{id}', "CidadeController@destroy")->middleware(CheckAdm::class);
Route::resource("/raca","RacaController",['except'=>'destroy'])->middleware(CheckAdm::class);
Route::delete('/raca/remover/{id}', "RacaController@destroy")->middleware(CheckAdm::class);
Route::resource("/especie","EspecieController",['except'=>'destroy'])->middleware(CheckAdm::class);
Route::delete('/especie/remover/{id}', "EspecieController@destroy")->middleware(CheckAdm::class);
Route::resource("/usuarios_has_usuarios","UsuarioHasUsuariosController",['except'=>'destroy'])->middleware(CheckAdm::class);
Route::delete('/usuarios_has_usuarios/remover/{id}', "UsuarioHasUsuariosController@destroy")->middleware(CheckAdm::class);
Route::resource("/interesse","InteresseController",['except'=>'destroy'])->middleware(CheckAdm::class);
Route::delete('/interesse/remover/{id}', "InteresseController@destroy")->middleware(CheckAdm::class);
Route::resource("/publicacao","PublicacaoController",['except'=>'destroy'])->middleware(CheckAdm::class);
Route::delete('/publicacao/remover/{id}', "PublicacaoController@destroy")->middleware(CheckAdm::class);
Route::resource("/comentario","ComentarioController",['except'=>'destroy'])->middleware(CheckAdm::class);
Route::delete('/comentario/remover/{id}', "ComentarioController@destroy")->middleware(CheckAdm::class);


Route::resource("/endereco", "EnderecoController",["except"=>"destroy"])->middleware(CheckAdm::class);
Route::delete('/endereco/remover/{id}', "EnderecoController@destroy")->middleware(CheckAdm::class);
Route::resource("/usuarioAnimal", "UsuarioAnimalController",["except"=>"destroy"])->middleware(CheckAdm::class);
Route::delete('/usuarioAnimal/remover/{id}', "UsuarioAnimalController@destroy")->middleware(CheckAdm::class);
Route::resource("/animal", "AnimalController",["except"=>"destroy"])->middleware(CheckAdm::class);
Route::delete('/animal/remover/{id}', "AnimalController@destroy")->middleware(CheckAdm::class);
Route::post('/login','LoginController@entrar');


Route::get('/', "LoginController@index")->name("inicio");

Route::get('/cadastro', function () {
    return view('cadastro');
});

Route::get('/home','HomeController@home')->name("home");
Route::get('/perfil','HomeController@perfil')->name("perfil");
Route::get('/perfilInt','HomeController@perfilInteresses')->name("perfilInteresses");
Route::get('/cuidados_basicos','HomeController@cuidados')->name("cuidadosDosAnimais");
Route::get('/direitos_dos_animais','HomeController@direitos')->name("direitosDosAnimais");
Route::get('/gerenciar_entidades','HomeController@entidades')->name('entidades')->middleware(CheckAdm::class);



