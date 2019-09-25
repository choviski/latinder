<?php

namespace App\Http\Controllers;

use App\Animal;
use App\Publicacao;
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
        return view("animal.create");
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
        $animal=Animal::find($id);
        return view('animal.edit')->with(["animal"=>$animal]);
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
        return redirect()->Route("animal.index");
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
