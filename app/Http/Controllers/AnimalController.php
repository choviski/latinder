<?php

namespace App\Http\Controllers;

use App\Animal;
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
    public function create()
    {
        $raca=Racas::all();
        $endereco=Endereco::all();
        return view("animal.create")->with(["enderecos"=>$endereco,"racas"=>$raca]);
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
    $animal = Animal::create($request->except(['rua,bairro,id_cidade,compl,cep']));
    $imagem = Input::file("imagem");
    $extensao=$imagem->getClientOriginalExtension();
    $imagem=File::move($imagem,public_path().'/imagem-animal/animal-id'.$animal->id.'.'.$extensao);
    $animal->imagem='imagem-animal/animal-id'.$animal->id.'.'.$extensao;
    if($request->rua){
        $endereco= new Endereco();
        $endereco->rua=$request->rua;
        $endereco->cep=$request->cep;
        $endereco->bairro=$request->bairro;
        $endereco->complemento=$request->complemento;
        $endereco->id_cidade=$request->id_cidade;
        $endereco->save();
        $animal->id_endereco=$endereco->id;
    }
    $animal->save();
    $publicacao = new Publicacao();
    $publicacao->id_animal= $animal->id;
    $usuario = session()->get("Usuario");
    $publicacao->id_usuario=$usuario->id;
    $publicacao->save();
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
