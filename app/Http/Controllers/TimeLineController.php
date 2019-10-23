<?php

namespace App\Http\Controllers;

use App\Comentario;
use App\Interesse;
use App\Publicacao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TimeLineController extends Controller
{
    public function timeLine (){
        $usuario = session()->get("Usuario");
        $publicacoes=Publicacao::select(DB::raw("*,if(
    abs (TIMESTAMPDIFF(hour,now(),created_at)) < 1,
	concat('Postado ',abs(TIMESTAMPDIFF(minute,now(),created_at)),' minuto(s) atrás'),
    if(
        abs(TIMESTAMPDIFF(hour,now(),created_at)) > 24,
        concat('Postado ',abs(TIMESTAMPDIFF(day,now(),created_at)),' dia(s) atrás'),
        concat('Postado ',abs(TIMESTAMPDIFF(hour,now(),created_at)),' hora(s) atrás')
    )
)as tempo
   "))->orderBy('created_at', 'desc')->get();
        $comentario=Comentario::all();
         $interesse=Interesse::all();
        return view("home")->with(["publicacoes"=>$publicacoes,"usuario"=>$usuario,"comentarios"=>$comentario,"interesses"=>$interesse]);
    }
}
