<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
 public function home(){
     $usuario = session()->get("Usuario");
     return view("home")->with(["usuario" => $usuario]);
    }
    public function perfil(){
        $usuario = session()->get("Usuario");
        return view("perfilcomcadastros")->with(["usuario" => $usuario]);
    }
    public function perfilInteresses(){
        $usuario = session()->get("Usuario");
        return view("perfilcominteresses")->with(["usuario" => $usuario]);
    }
    public function direitos(){
        $usuario = session()->get("Usuario");
        return view("direitosdosanimais")->with(["usuario" => $usuario]);
    }
    public function cuidados(){
        $usuario = session()->get("Usuario");
        return view("cuidadosbasicos")->with(["usuario" => $usuario]);
    }
    public function entidades(){
        $usuario = session()->get("Usuario");
        return view("entidades")->with(["usuario" => $usuario]);
    }


}
