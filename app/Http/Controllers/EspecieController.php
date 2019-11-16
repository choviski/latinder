<?php

namespace App\Http\Controllers;

use App\Especie;
use App\Racas;
use Illuminate\Http\Request;

class EspecieController extends Controller
{
    public function especie($especie){
        $raca=Racas::select('nome','id')->where('id_especie','=',$especie)->get();
        return Response()->json([
            'raca' => $raca,
        ]);

    }
    public function index()
    {
        $especie = Especie::all();
        return view("especie.index")->with(["especies"=>$especie]);
    }

    public function create()
    {
        return view("especie.create");
    }

    public function store(Request $request)
    {
        Especie::create($request->all());
        return redirect()->Route("especie.index");
    }

    public function show($id)
    {
        $especie=Especie::find($id);
        return view("especie.show")->with(["especie"=>$especie]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $especie=Especie::find($id);
        return view("especie.edit")->with(["especie"=>$especie]);
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
        Especie::find($id)->update($request->all());
        return redirect()->Route("especie.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Especie::destroy($request->id);
        return redirect("/especie");

    }
}
