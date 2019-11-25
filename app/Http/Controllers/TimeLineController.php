<?php

namespace App\Http\Controllers;

use App\Cidade;
use App\Comentario;
use App\Interesse;
use App\Publicacao;
use App\Racas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TimeLineController extends Controller
{
    public function timeLine (Request $request){
        $criar = $request->session()->get("criar");
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
        $racas=Racas::all();
        return view("home")->with(["publicacoes"=>$publicacoes,"usuario"=>$usuario,"comentarios"=>$comentario,"interesses"=>$interesse,"criar"=>$criar,"racas"=>$racas]);
    }
}
