<?php

namespace App\Http\Controllers;

use App\Mensagem;
use Illuminate\Http\Request;

class MensagemController extends Controller
{

    public function index()
    {
        $mensagens = Mensagem::all();
     return view("mensagem.index")->with(["mensagens"=>$mensagens]);
    }
    public function create()
    {
        return view("mensagem.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Mensagem::create($request->all());
        return redirect()->Route("mensagem.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mensagem=Mensagem::find($id);
        return view("mensagem.show")->with(["mensagem"=>$mensagem]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $mensagem = Mensagem::find($id);
       return view("mensagem.edit")->with(["mensagem"=>$mensagem]);
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
        Mensagem::find($id)->update($request->all());
        return redirect()->Route("mensagem.index");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Mensagem::destroy($request->id);
        return redirect("/mensagem");
    }
}
