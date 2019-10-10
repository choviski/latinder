<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comentario extends Model
{
    protected $table ="comentarios";
    protected $fillable = ['id_usuario','id_publicacao','conteudo'];
    public function usuario(){
        return $this->belongsTo("App\Usuario",'id_usuario','id');
    }
    public function publicacao(){
        return $this->belongsTo("App\Publicacao",'id_publicacao','id');
    }
    use SoftDeletes;
}
