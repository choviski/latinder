<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Usuario extends Model
{
    protected $table ="usuarios";

    protected $fillable = ['nome','login','email','senha','imagem','perfil','perguntaSecreta','resposta'];
    use SoftDeletes;
    public function animal(){
        return $this->belongsToMany('App\Animais', 'publicacaos', 'id_usuario', 'id_animal');
    }
       public function publicacao(){
        return $this->hasOne('App\Publicacao', 'id_usuario','id');
    }
    public function publicacao2(){
        return $this->belongsToMany('App\Publicacao', 'comentarios', 'id_usuario', 'id_publicacao');
    }
    public function comentario(){
        return $this->hasOne('App\Comentario', 'id_usuario','id');
    }
    public function mensagem(){
        return $this->hasOne('App\Mensagem', 'id_destinatario','id');
    }
    public function mensagem2(){
        return $this->hasOne('App\Mensagem', 'id_remetente','id');
    }


}
