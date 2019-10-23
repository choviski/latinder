<?php

namespace App\Http\Controllers;

use App\Interesse;
use App\Publicacao;
use Illuminate\Http\Request;

class PublicacaoController extends Controller
{
    public function index()
    {
        $publicacao = Publicacao::all();
        return view("publicacao.index")->with(["publicacaos"=>$publicacao]);
    }

    public function create()
    {
        return view("publicacao.create");
    }

    public function store(Request $request)
    {
        Publicacao::create($request->all());
        return redirect()->Route("publicacao.index");
    }

    public function show($id)
    {
        $publicacao=Publicacao::find($id);
        return view("publicacao.show")->with(["publicacao"=>$publicacao]);
    }
    public function listar()
    {
        $usuario = session()->get("Usuario");
        $publicacao=Publicacao::where('id_usuario','=',$usuario->id)->orderBy('created_at', 'desc')->get();
        return view("perfilcomcadastros")->with(["publicacaos"=>$publicacao,"usuario"=>$usuario]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $publicacao=Publicacao::find($id);
        return view("publicacao.edit")->with(["publicacao"=>$publicacao]);
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
        Publicacao::find($id)->update($request->all());
        return redirect()->Route("publicacao.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

        $publicacao=Publicacao::where('id','=',$request->id)->get();
        $interesses=Interesse::where('id_publicacao','=',$publicacao[0]->id)->get();
        foreach ($interesses as $interesse) {
            Interesse::destroy($interesse->id);
        }
        Publicacao::destroy($request->id);
        return redirect(route("timeLine"));

    }
}
