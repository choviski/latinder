<?php

namespace App\Http\Controllers;

use App\UsuarioHasUsuario;
use Illuminate\Http\Request;

class UsuarioHasUsuariosController extends Controller
{
    public function index()
    {
        $usuarios_has_usuario = UsuarioHasUsuario::all();
        return view("usuarios_has_usuarios.index")->with(["usuarios_has_usuarios"=>$usuarios_has_usuario]);
    }

    public function create()
    {
        return view("usuarios_has_usuarios.create");
    }

    public function store(Request $request)
    {
        UsuarioHasUsuario::create($request->all());
        return redirect()->Route("usuarios_has_usuarios.index");
    }

    public function show($id)
    {
        $usuarios_has_usuario=UsuarioHasUsuario::find($id);
        return view("usuarios_has_usuarios.show")->with(["usuarios_has_usuario"=>$usuarios_has_usuario]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuarios_has_usuario=UsuarioHasUsuario::find($id);
        return view("usuarios_has_usuarios.edit")->with(["usuarios_has_usuario"=>$usuarios_has_usuario]);
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
        UsuarioHasUsuario::find($id)->update($request->all());
        return redirect()->Route("usuarios_has_usuarios.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        UsuarioHasUsuario::destroy($request->id);
        return redirect("/usuarios_has_usuarios");

    }
}
