<?php

namespace App\Http\Controllers;

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
        Publicacao::destroy($request->id);
        return redirect("/publicacao");

    }
}
