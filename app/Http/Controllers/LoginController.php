<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(Request $request){
        $mensagem = $request->session()->get("mensagem");
        return view("welcome",compact("mensagem","mensagem"));
    }
    public function entrar(Request $request){

        $Usuario= Usuario::where('login','=',$request->login)->get();
        if(!$Usuario->isEmpty()){
            $Usuario=$Usuario[0];

            if ($Usuario->senha==$request->senha){
                $request->session()->put("Usuario",$Usuario);

                return redirect("/home");
            }
            $request->session()->flash("mensagem","Usuario ou senha incorretos");
            return redirect()->back();
        }
        $request->session()->flash("mensagem","Usuario não cadastrado");
        return redirect()->back();
    }
    }

