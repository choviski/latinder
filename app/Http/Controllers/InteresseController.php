<?php

namespace App\Http\Controllers;

use App\Interesse;
use App\Publicacao;
use Illuminate\Http\Request;

class InteresseController extends Controller
{
    public function index()
    {
        $interesse = Interesse::all();
        return view("interesse.index")->with(["interesses"=>$interesse]);
    }

    public function create()
    {
        return view("interesse.create");
    }

    public function store($id)
{
    $publicacao=Publicacao::find($id);
    $usuario = session()->get("Usuario");
    $interesse= new Interesse();
    $interesse->id_publicacao=$publicacao->id;
    $interesse->id_usuario=$usuario->id;
    $interesse->save();
    return redirect("timeLine");
}
    public function listar()
    {
        $usuario = session()->get("Usuario");

        $interesse=Interesse::where('id_usuario','=',$usuario->id)->orderBy('created_at', 'desc')->get();
        return view("perfilcominteresses")->with(["interesses"=>$interesse,"usuario"=>$usuario]);
    }

    public function show($id)
    {
        $interesse=Interesse::find($id);
        return view("interesse.show")->with(["interesse"=>$interesse]);
    }

    public function edit($id)
    {
        $interesse=Interesse::find($id);
        return view("interesse.edit")->with(["interesse"=>$interesse]);
    }

    public function update(Request $request, $id)
    {
        Interesse::find($id)->update($request->all());
        return redirect()->Route("interesse.index");
    }


    public function destroy(Request $request)
    {
        Interesse::destroy($request->id);
        return redirect("/interesse");

    }

}
