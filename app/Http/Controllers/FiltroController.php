<?php

namespace App\Http\Controllers;

use App\Comentario;
use App\Interesse;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Animal;
use App\Cidade;
use App\Endereco;
use App\Publicacao;
use App\Racas;
use Illuminate\Support\Facades\DB;


class FiltroController extends Controller
{
    public function filtrar(Request $request)
    {
        $usuario = session()->get("Usuario");

        $pelagem = $request->pelagem;
        $cor = $request->cor;
        $sexo = $request->sexo;
        $raca = $request->raca;
        $porte = $request->porte;
        if($pelagem == "0" and $cor == "0" and $sexo == "0" and $raca == "0" and $porte == "0" ){
            return redirect("timeLine");
        }else{
            $publicacoes = collect([]);
            $comentarios = [];
            $interesses=[];
            $animais=Animal::where('porte','=',$porte)->orWhere('cor','=',$cor)->orWhere('sexo','=',$sexo)->orWhere('pelagem','=',$pelagem)->orWhere('id_raca','=',$raca)->get();

            foreach($animais as $animal){

                $publicacao = Publicacao::select(DB::raw("*,if(
    abs (TIMESTAMPDIFF(hour,now(),created_at)) < 1,
	concat('Postado ',abs(TIMESTAMPDIFF(minute,now(),created_at)),' minuto(s) atrás'),
    if(
        abs(TIMESTAMPDIFF(hour,now(),created_at)) > 24,
        concat('Postado ',abs(TIMESTAMPDIFF(day,now(),created_at)),' dia(s) atrás'),
        concat('Postado ',abs(TIMESTAMPDIFF(hour,now(),created_at)),' hora(s) atrás')
    )
)as tempo
   "))->where('id_animal','=',$animal->id)->whereNull('deleted_at')->orderBy('created_at', 'desc')->get();

                $publicacoes->push($publicacao);
            }


            foreach($publicacoes as $publicacao){
                foreach($publicacao as $publi){
                    $comentarios = Comentario::where('id_publicacao','=',$publi->id)->get();
                }
            }
            ;
            foreach($publicacoes as $publicacao){
                foreach($publicacao as $publi){
                    $interesses = Interesse::where('id_publicacao','=',$publi->id)->get();
                }
            }
            $racas=Racas::all();

            return view("filtroHome")->with(["publicacoes"=>$publicacoes,"usuario"=>$usuario,"comentarios"=>$comentarios,"interesses"=>$interesses,"racas"=>$racas]);
        }
    }

    public function testeChat()
    {
        $usuario = session()->get("Usuario");
        $racas=Racas::all();
        return view("chat")->with(["usuario"=>$usuario,"racas"=>$racas]);
    }
    public function conversasChat()
    {
        $usuario = session()->get("Usuario");
        $racas=Racas::all();
        return view("conversasChat")->with(["usuario"=>$usuario,"racas"=>$racas]);
    }
}
