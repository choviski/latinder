<?php

namespace App\Http\Controllers;

use App\Comentario;
use Illuminate\Http\Request;

class ComentarioController extends Controller
{
    public function index()
    {
        $comentario = Comentario::all();
        return view("comentario.index")->with(["comentarios"=>$comentario]);
    }

    public function create()
    {
        return view("comentario.create");
    }
    public function comentar(Request $request){
    $usuario=$request->session()->get("Usuario");
    $comentario = new Comentario;
    $comentario->id_usuario = $usuario->id;
    $comentario->id_publicacao=$request->publicacao;
    $comentario->conteudo=$request->conteudo;
    $comentario->save();
    return redirect("timeLine");

        }


    public function store(Request $request)
    {
        $usuario=$request->session()->get("Usuario");

        $comentario = new Comentario;
        $comentario->id_usuario = $usuario->id;
        $comentario->id_publicacao=$request->publicacao;
        $comentario->save();
        return redirect("timeLine");
    }

    public function show($id)
    {
        $comentario=Comentario::find($id);
        return view("comentario.show")->with(["comentario"=>$comentario]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comentario=Comentario::find($id);
        return view("comentario.edit")->with(["comentario"=>$comentario]);
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
        Comentario::find($id)->update($request->all());
        return redirect()->Route("comentario.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Comentario::destroy($request->id);
        return redirect("/comentario");

    }
}
