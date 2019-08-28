<?php

namespace App\Http\Controllers;

use App\Cidade;
use Illuminate\Http\Request;

class CidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cidade = Cidade::all();
        return view("cidade.index")->with(["cidades"=>$cidade]);
    }

    public function create()
    {
        return view("cidade.create");
    }

    public function store(Request $request)
    {
        Cidade::create($request->all());
        return redirect()->Route("cidade.index");
    }

    public function show($id)
    {
        $cidade=Cidade::find($id);
        return view("cidade.show")->with(["cidade"=>$cidade]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cidade=Cidade::find($id);
        return view("cidade.edit")->with(["cidade"=>$cidade]);
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
        Cidade::find($id)->update($request->all());
        return redirect()->Route("cidade.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Cidade::destroy($request->id);
        return redirect("/cidade");

    }
}
