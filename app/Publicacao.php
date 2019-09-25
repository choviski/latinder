<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Publicacao extends Model
{
    protected $table ="publicacaos";
    protected $fillable = ['id_animal','id_usuario'];
    public function usuario(){
        return $this->belongsTo("App\Usuario",'id_usuario','id');
    }
    public function animal(){
        return $this->belongsTo("App\Animal",'id_animal','id');
    }
    public function usuarios(){
        return $this->belongsToMany('App\Usuario', 'comentarios', 'id_publicacao', 'id_usuario');
    }
    public function interesse(){
        return $this->hasOne('App\Interesse', 'id_publicacao','id');
    }
    use SoftDeletes;
}
