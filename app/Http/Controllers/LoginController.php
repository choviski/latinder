<?php

namespace App\Http\Controllers;

use App\Usuario;
use App\Publicacao;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(Request $request){
        $mensagem = $request->session()->get("mensagem");
        $criado=$request->session()->get("criado");
        return view("welcome")->with(["mensagem"=>$mensagem,"criado"=>$criado]);
    }
    public function entrar(Request $request){

        $Usuario= Usuario::where('login','=',$request->login)->get();
        if(!$Usuario->isEmpty()){
            $Usuario=$Usuario[0];

            if ($Usuario->senha==$request->senha){
                $request->session()->put("Usuario",$Usuario);


                return redirect("timeLine");
            }
            $request->session()->flash("mensagem","Usuario ou senha incorretos");
            return redirect()->back();
        }
        $request->session()->flash("mensagem","Usuario não cadastrado");
        return redirect()->back();
    }

    public function sair(Request $request){
        $request->session()->flush();
        return redirect("/");
    }
    }

