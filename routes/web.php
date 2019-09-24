<?php
use App\Http\Middleware\CheckAdm;
use App\Http\Middleware\CheckSession;

Route::resource('/usuario', 'UsuarioController' , ['except' => 'destroy','create','store'])->middleware(CheckSession::class,CheckAdm::class);
Route::delete('/usuario/remover/{id}', "UsuarioController@destroy")->middleware(CheckSession::class,CheckAdm::class);
Route::get('/usuario/create', "UsuarioController@create")->name("cadastroUsuario");
Route::post('/usuario', "UsuarioController@store")->name("storeUsuario");
Route::resource('/mensagem', 'MensagemController' , ['except' => 'destroy'])->middleware(CheckSession::class,CheckAdm::class);
Route::delete('/mensagem/remover/{id}', "MensagemController@destroy")->middleware(CheckSession::class,CheckAdm::class);
Route::resource("/cidade","CidadeController",['except'=>'destroy'])->middleware(CheckSession::class,CheckAdm::class);
Route::delete('/cidade/remover/{id}', "CidadeController@destroy")->middleware(CheckSession::class,CheckAdm::class);
Route::resource("/raca","RacaController",['except'=>'destroy'])->middleware(CheckSession::class,CheckAdm::class);
Route::delete('/raca/remover/{id}', "RacaController@destroy")->middleware(CheckSession::class,CheckAdm::class);
Route::resource("/especie","EspecieController",['except'=>'destroy'])->middleware(CheckSession::class,CheckAdm::class);
Route::delete('/especie/remover/{id}', "EspecieController@destroy")->middleware(CheckSession::class,CheckAdm::class);
Route::resource("/usuarios_has_usuarios","UsuarioHasUsuariosController",['except'=>'destroy'])->middleware(CheckSession::class,CheckAdm::class);
Route::delete('/usuarios_has_usuarios/remover/{id}', "UsuarioHasUsuariosController@destroy")->middleware(CheckSession::class,CheckAdm::class);
Route::resource("/interesse","InteresseController",['except'=>'destroy'])->middleware(CheckSession::class,CheckAdm::class);
Route::delete('/interesse/remover/{id}', "InteresseController@destroy")->middleware(CheckSession::class,CheckAdm::class);
Route::resource("/publicacao","PublicacaoController",['except'=>'destroy'])->middleware(CheckSession::class,CheckAdm::class);
Route::delete('/publicacao/remover/{id}', "PublicacaoController@destroy")->middleware(CheckSession::class,CheckAdm::class);
Route::resource("/comentario","ComentarioController",['except'=>'destroy'])->middleware(CheckSession::class,CheckAdm::class);
Route::delete('/comentario/remover/{id}', "ComentarioController@destroy")->middleware(CheckSession::class,CheckAdm::class);


Route::resource("/endereco", "EnderecoController",["except"=>"destroy"])->middleware(CheckSession::class,CheckAdm::class);
Route::delete('/endereco/remover/{id}', "EnderecoController@destroy")->middleware(CheckSession::class,CheckAdm::class);
Route::resource("/usuarioAnimal", "UsuarioAnimalController",["except"=>"destroy"])->middleware(CheckSession::class,CheckAdm::class);
Route::delete('/usuarioAnimal/remover/{id}', "UsuarioAnimalController@destroy")->middleware(CheckSession::class,CheckAdm::class);
Route::resource("/animal", "AnimalController",["except"=>"destroy"])->middleware(CheckSession::class,CheckAdm::class);
Route::delete('/animal/remover/{id}', "AnimalController@destroy")->middleware(CheckSession::class,CheckAdm::class);
Route::post('/login','LoginController@entrar');

Route::get('/dashboard','DashboardController@getMonthlyAllData')->middleware(CheckSession::class,CheckAdm::class);


Route::get('/', "LoginController@index")->name("inicio");
Route::get('/sair', "LoginController@sair")->name("sair");

Route::get('/cadastro', function () {
    return view('cadastro')->middleware(CheckSession::class);
});

Route::get('/home','HomeController@home')->name("home")->middleware(CheckSession::class);
Route::get('/perfil','HomeController@perfil')->name("perfil")->middleware(CheckSession::class);
Route::get('/perfilInt','HomeController@perfilInteresses')->name("perfilInteresses")->middleware(CheckSession::class);
Route::get('/cuidados_basicos','HomeController@cuidados')->name("cuidadosDosAnimais")->middleware(CheckSession::class);
Route::get('/direitos_dos_animais','HomeController@direitos')->name("direitosDosAnimais")->middleware(CheckSession::class);
Route::get('/gerenciar_entidades','HomeController@entidades')->name('entidades')->middleware(CheckSession::class,CheckAdm::class);



