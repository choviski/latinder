<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Usuario extends Model
{
    protected $table ="usuarios";
    protected $fillable = ['nome','login','email','senha','imagem'];
    public function animal(){
        return $this->belongsToMany('App\Animais', 'publicacaos', 'id_usuario', 'id_animal');
    }
       public function publicacao(){
        return $this->hasOne('App\Publicacao', 'id_usuario','id');
    }
    public function publicacao2(){
        return $this->belongsToMany('App\Publicacao', 'comentarios', 'id_usuario', 'id_publicacao');
    }
    use SoftDeletes;
}
