<?php

namespace App\Http\Controllers;

use App\Usuario;
use App\UsuarioHasAnimal;
use Illuminate\Http\Request;

class UsuarioAnimalController extends Controller
{

    public function index()
    {
        $usuario=UsuarioHasAnimal::all();
        return view ("usuarioAnimal.index")->with(["usuarios"=>$usuario]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ("usuarioAnimal.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        UsuarioHasAnimal::create($request->all());
        return redirect()->route("usuarioAnimal.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario=UsuarioHasAnimal::find($id);
        return view("usuarioAnimal.show")->with(["usuario"=>$usuario]);
    }


    public function edit($id)
    {
        $usuario=UsuarioHasAnimal::find($id);
        return view("usuarioAnimal.edit")->with(["usuario"=>$usuario]);
    }

    public function update(Request $request, $id)
    {
        UsuarioHasAnimal::find($id)->update($request->all());
        return redirect()->route("usuarioAnimal.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        UsuarioHasAnimal::destroy($request->id);
        return redirect("/usuarioAnimal");
    }
}
