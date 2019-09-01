<?php

namespace App\Http\Controllers;

use App\Racas;
use Illuminate\Http\Request;

class RacaController extends Controller
{
    public function index()
    {
        $raca = Racas::all();
        return view("raca.index")->with(["racas"=>$raca]);
    }

    public function create()
    {
        return view("raca.create");
    }

    public function store(Request $request)
    {
        Racas::create($request->all());
        return redirect()->Route("raca.index");
    }

    public function show($id)
    {
        $raca=Racas::find($id);
        return view("raca.show")->with(["raca"=>$raca]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $raca=Racas::find($id);
        return view("raca.edit")->with(["raca"=>$raca]);
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
        Racas::find($id)->update($request->all());
        return redirect()->Route("raca.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Racas::destroy($request->id);
        return redirect("/raca");

    }
}
