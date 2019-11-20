<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Racas;
class HomeController extends Controller
{
 public function home(){
     $usuario = session()->get("Usuario");
     $racas=Racas::all();
     return view("home")->with(["usuario" => $usuario,"racas"=>$racas]);
    }
    public function perfil(){
        $usuario = session()->get("Usuario");
        $racas=Racas::all();
        return view("perfilcomcadastros")->with(["usuario" => $usuario,"racas"=>$racas]);
    }
    public function perfilInteresses(){
        $usuario = session()->get("Usuario");
        $racas=Racas::all();
        return view("perfilcominteresses")->with(["usuario" => $usuario,"racas"=>$racas]);
    }
    public function direitos(){
        $usuario = session()->get("Usuario");
        $racas=Racas::all();
        return view("direitosdosanimais")->with(["usuario" => $usuario,"racas"=>$racas]);
    }
    public function cuidados(){
        $usuario = session()->get("Usuario");
        $racas=Racas::all();
        return view("cuidadosbasicos")->with(["usuario" => $usuario,"racas"=>$racas]);
    }
    public function entidades(){
        $usuario = session()->get("Usuario");
        $racas=Racas::all();
        return view("entidades")->with(["usuario" => $usuario,"racas"=>$racas]);
    }


}
