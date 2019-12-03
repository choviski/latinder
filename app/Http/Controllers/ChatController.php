<?php

namespace App\Http\Controllers;

use App\Conversa;
use App\Mensagem;
use App\Publicacao;
use App\Racas;
use App\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ChatController extends Controller
{
    public function batepapo($conversa){
        $usuario = session()->get("Usuario");
        $conversas=Conversa::find($conversa);
        $publicacaos=Publicacao::where('id','=',$conversas->id_publicacao)->first();
        $donoPublicacao=Usuario::where('id','=',$publicacaos->usuario->id)->first();
        $remetente=Usuario::where('id','=',$usuario->id)->first();
        if($donoPublicacao->id==$remetente->id){
            if($remetente->id==$conversas->usuario->id){
                $destinatario=$conversas->usuario2;
            }else{
                $destinatario=$conversas->usuario;
            }
        }else{
           $destinatario=$donoPublicacao;
        }
        $racas=Racas::all();
        $mensagem= Mensagem::where('id_conversa','=',$conversa)
            ->where('id_remetente','=',$remetente->id)
            ->orWhere('id_destinatario','=',$destinatario->id)
            ->where('id_remetente','=',$destinatario->id)
            ->orWhere('id_destinatario','=',$remetente->id)
            ->where('id_conversa','=',$conversa)

            ->orderBy("created_at")->get();
        $id_um = Mensagem::where('id_conversa','=',$conversa)->where('id_destinatario','=',$usuario->id)->orderBy("id","desc")->first();
        return view('chat')->with(["destinatario"=>$destinatario,"remetente"=>$remetente,"publicacao"=>$publicacaos,"usuario"=>$usuario,"racas"=>$racas,"mensagens"=>$mensagem,"ultima_mensagem"=>$id_um]);
    }
    public function listar(Request $request)
    {

        $usuario = $request->session()->get("Usuario");
        $racas = Racas::all();
        $conversas = Conversa::where('id_usuario', '=', $usuario->id)->orWhere('id_usuario2', '=', $usuario->id)->orderBy('created_at')->get();
        return view("conversasChat")->with(["usuario"=>$usuario,"racas"=>$racas,"conversas"=>$conversas]);
    }
    public function conversa($publicacao){
        $usuario = session()->get("Usuario");
        $publicacaos=Publicacao::where('id','=',$publicacao)->first();
        $destinatario=Usuario::where('id','=',$publicacaos->usuario->id)->first();
        $remetente=Usuario::where('id','=',$usuario->id)->first();
        $racas=Racas::all();
        $mensagem = Mensagem::where('id_remetente','=',$usuario->id)
            ->orWhere('id_destinatario','=',$usuario->id)
            ->where('id_remetente','=',$publicacaos->usuario->id)
            ->orWhere('id_destinatario','=',$publicacaos->usuario->id)
            ->orderBy("created_at")->get();
        $conversas=Conversa::whereRaw("(`id_usuario` = {$usuario->id} or `id_usuario2` = {$usuario->id}) and (`id_usuario` = {$destinatario->id} or `id_usuario2` = {$destinatario->id})")->get();
        if (!$conversas->count()) {
            $conversa = new Conversa();
            $conversa->id_usuario = $usuario->id;
            $conversa->id_usuario2 = $destinatario->id;
            $conversa->id_publicacao = $publicacao;
            $conversa->save();
        } else {
            $conversa = Conversa::where('id_publicacao', '=', $publicacaos->id)->where('id_usuario', '=', $usuario->id)
                ->orWhere('id_usuario2', '=', $usuario->id)
                ->where('id_usuario', '=', $publicacaos->usuario->id)
                ->orWhere('id_usuario2', '=', $publicacaos->usuario->id)->first();
        }
        if(Mensagem::where('id_conversa','=',$conversa->id)->where('id_destinatario','=',$usuario->id)->orderBy("id","desc")->first()){
            $id_um = Mensagem::where('id_conversa','=',$conversa->id)->where('id_destinatario','=',$usuario->id)->orderBy("id","desc")->first();
        }else {
            $id_um="";
        };

        return view('chat')->with(["destinatario"=>$destinatario,"remetente"=>$remetente,"publicacao"=>$publicacaos,"usuario"=>$usuario,"racas"=>$racas,"mensagens"=>$mensagem,"ultima_mensagem"=>$id_um]);
    }
    public function mensagem(Request $request){
        $usuario = session()->get("Usuario");
        $destinatario=Usuario::where('id','=',$request->destinatario)->first();
        $mensagem =  new Mensagem();
        $conversas=Conversa::whereRaw("(`id_usuario` = {$usuario->id} or `id_usuario2` = {$usuario->id}) and (`id_usuario` = {$destinatario->id} or `id_usuario2` = {$destinatario->id})")->get();
            if (!$conversas->count()) {
                $conversa = new Conversa();
                $conversa->id_usuario = $usuario->id;
                $conversa->id_usuario2 = $request->destinatario;
                $conversa->id_publicacao = $request->publicacao;
                $conversa->save();
            } else {
                $conversa = $conversas[0];
            }
        $mensagem->id_destinatario = $request->destinatario;
        $mensagem->id_remetente = $request->remetente;
        $mensagem->conteudo = $request->mensagem;
        $mensagem->id_conversa = $conversa->id;
        $mensagem->save();
        $raca=Racas::all();
        $remetente=Usuario::where('id','=',$request->remetente)->first();
        $publicacaos=Publicacao::where('id','=',$request->publicacao)->first();
        $mensagem= Mensagem::where('id_remetente','=',$usuario->id)->orWhere('id_destinatario','=',$usuario->id)->where('id_destinatario','=',$request->destinatario)->orWhere('id_remetente','=',$request->destinatario)->orderBy("created_at")->get();
        return view('chat')->with(["destinatario"=>$destinatario,"remetente"=>$remetente,"publicacao"=>$publicacaos,"usuario"=>$usuario,"racas"=>$raca,"mensagens"=>$mensagem]);
    }
    public function mensagemAjax(Request $request){
       $publicacaos=Publicacao::where('id','=',$request->publicacao)->first();
       $destinatario=Usuario::where('id','=',$publicacaos->usuario->id)->first();
       $usuario = session()->get("Usuario");
       $conversas=Conversa::whereRaw("(`id_usuario` = {$usuario->id} or `id_usuario2` = {$usuario->id}) and (`id_usuario` = {$request->id_destinatario} or `id_usuario2` = {$request->id_destinatario})")->get();
        if (!$conversas->count()) {
           $conversa = new Conversa();
           $conversa->id_usuario = $usuario->id;
           $conversa->id_usuario2 = $destinatario->id;
           $conversa->id_publicacao = $request->publicacao;
           $conversa->save();
       } else {
           $conversa = $conversas[0];
       }
        $nova_mensagem = new Mensagem();
        $nova_mensagem->id_destinatario=$request->id_destinatario;
        $nova_mensagem->id_remetente=$request->id_remetente;
        $nova_mensagem->conteudo=$request->conteudo;
        $nova_mensagem->id_conversa=$conversa->id;
        $nova_mensagem->save();
        return $nova_mensagem;

        return $conversa;

    }

    public function novaMensagem(Request $request){
        $publicacaos=Publicacao::where('id','=',$request->publicacao)->first();
        $destinatario=Usuario::where('id','=',$publicacaos->usuario->id)->first();
        $usuario = session()->get("Usuario");
        $conversas=Conversa::whereRaw("(`id_usuario` = {$usuario->id} or `id_usuario2` = {$usuario->id}) and (`id_usuario` = {$request->id_destinatario} or `id_usuario2` = {$request->id_destinatario})")->first();

        $id_ultima_mensagem = $request->id_ultima_mensagem;
        $mensagensNovas = Mensagem::where('id_destinatario','=',$usuario->id)->where('id','>',$id_ultima_mensagem)->where('id_conversa','=',$conversas->id)->get();
        $id_ultima_mensagem =  Mensagem::where('id_destinatario','=',$usuario->id)->where('id_conversa','=',$conversas->id)->orderBy("id","desc")->first("id");

        return response()->json([
            'mensagensnovas'=>$mensagensNovas,
            'id_ultima_mensagem'=>$id_ultima_mensagem
            ]);

    }
}
