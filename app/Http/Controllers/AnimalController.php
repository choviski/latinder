<?php

namespace App\Http\Controllers;

use App\Animal;
use App\Cidade;
use App\Endereco;
use App\Publicacao;
use App\Racas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use File;
use Illuminate\Support\Facades\DB;

class AnimalController extends Controller
{
    public function index()
    {
        $animais = Animal::all();
        return view("animal.index")->with(["animais" => $animais]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $usuario = $request->session()->get("usuario");
        $raca=Racas::where('id_especie','=',1);
        $animais = Animal::all();
        $usuario=$request->session()->get("Usuario");
        $publicacaos=Publicacao::where('id_usuario','=',$usuario->id)->get();
        $n=-1;
        if($publicacaos->count()) {
            $anima[]=0;
            foreach ($animais as $animal) {
                foreach ($publicacaos as $publicacao) {
                    if ($publicacao->id_animal == $animal->id) {
                        $n = $n + 1;
                        $anima[$n] = $animal;
                    }
                }
            }
            $enderecos = Endereco::all();
            for ($i = 0; $i < sizeof($anima); $i++) {
                foreach ($enderecos as $endereco) {
                    if ($endereco->id == $anima[$i]->id_endereco) {
                        $enderec[$i] = $endereco;
                    }
                }
            }
        }else{
            $enderec=0;
        }
        $sem_endereco=session()->get("sem_endereco");
        $cidades=Cidade::all();
        return view("animal.create")->with(["enderecos"=>$enderec,"racas"=>$raca,"cidades"=>$cidades,'usuario'=>$usuario,"sem_endereco"=>$sem_endereco]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $animal = Animal::create($request->all());
        $imagem = Input::file("imagem");
        $extensao=$imagem->getClientOriginalExtension();
        $imagem=File::move($imagem,public_path().'/imagem-animal/animal-id'.$animal->id.'.'.$extensao);
        $animal->imagem='imagem-animal/animal-id'.$animal->id.'.'.$extensao;
        $animal->save();
        $publicacao = new Publicacao();
        $publicacao->id_animal= $animal->id;
        $usuario = session()->get("Usuario");
        $publicacao->id_usuario=$usuario->id;
        $publicacao->save();
        return redirect("timeLine");

    }

public function criar(Request $request){
    $animal = Animal::create($request->except(['rua,bairro,id_cidade,compl,cep,id_endereco']));
    if($request->rua&&$request->id_cidade&&$request->bairro&&$request->cep&&$request->complemento){
        try {
            $endereco = new Endereco();
            $endereco->rua = $request->rua;
            $endereco->cep = $request->cep;
            $endereco->bairro = $request->bairro;
            $endereco->complemento = $request->complemento;
            $endereco->id_cidade = $request->id_cidade;
            $endereco->save();
            $animal->id_endereco = $endereco->id;
        }catch (Exception $e){
            session()->put("sem_endereco","Preencha todos os dados do seu endereço corretamente");
            return redirect()->back();
        }
    }else{
        $animal->id_endereco=$request->id_endereco;
    }
    $imagem = Input::file("imagem");
    $extensao=$imagem->getClientOriginalExtension();
    $imagem=File::move($imagem,public_path().'/imagem-animal/animal-id'.$animal->id.'.'.$extensao);
    $animal->imagem='imagem-animal/animal-id'.$animal->id.'.'.$extensao;

    $animal->save();
    $publicacao = new Publicacao();
    $publicacao->id_animal= $animal->id;
    $usuario = session()->get("Usuario");
    $publicacao->id_usuario=$usuario->id;
    $publicacao->save();
    $request->session()->flash("criar","Publicação criada com sucesso!");
    return redirect("timeLine");

}
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $animal=Animal::find($id);
        return view('animal.show')->with(["animal"=>$animal]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $raca=Racas::all();
        $endereco=Endereco::all();
        $animal=Animal::find($id);
        return view('animal.edit')->with(["animal"=>$animal,"enderecos"=>$endereco,"racas"=>$raca]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Animal::find($id)->update($request->all());
        return redirect()->Route("timeLine");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Animal::destroy($request->id);
        return redirect("/animal");
    }


}
