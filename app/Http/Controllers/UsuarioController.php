<?php

namespace App\Http\Controllers;
use App\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{

    public function index()
    {
        $usuarios = Usuario::all();
        return view("usuario.index")->with(["usuarios" => $usuarios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $erro=session()->get("erro");
        $erro2=session()->get("erro2");
        return view("usuario.create")->with(["erro"=>$erro,"erro2"=>$erro2]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuarios=Usuario::all();
        foreach ($usuarios as $usuario){
           $request->session()->flash("erro","Já ha um usuário cadastrado com esse e-mail, por favor tente usar outro e-mail");
            if($usuario->email==$request->email){
                return redirect()->back();
            }
        }
        foreach ($usuarios as $usuario){
            $request->session()->flash("erro2","Já ha um usuário cadastrado com esse login, por favor tente usar outro login");
            if($usuario->login==$request->login){
                return redirect()->back();
            }
        }
      Usuario:: create($request->all());
        $request->session()->flash("criado","Usuario cadastrado com sucesso!");
        return redirect()->route("inicio");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuarios=Usuario::find($id);
        return view('usuario.show')->with(["usuario"=>$usuarios]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuarios=Usuario::find($id);
        return view('usuario.edit')->with(["usuario"=>$usuarios]);
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
        Usuario::find($id)->update($request->all());
        return redirect()->Route("usuario.index");
    }
public function esqueceu(){
        return view ("esqueceu");
}
public function recuperar(Request $request){
        $usuario=Usuario::where("login",'=',$request->login)->first();
        return view("recuperar")->with(["usuario"=>$usuario]);
}
    public function destroy(Request $request)
    {
        Usuario::destroy($request->id);
        return redirect("/usuario");
    }
}
