<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Animal extends Model
{
    protected $table ="animals";
    protected $fillable = ['nome','pelagem','vacinacao','porte','sexo','catracao','idade','imagem','descricao',
        'cor','id_raca','id_endereco'];
    use SoftDeletes;
    public function endereco(){
        return $this->belongsTo("App\Endereco",'id_endereco','id');
    }
    public function raca(){
        return $this->belongsTo("App\Raca",'id_raca','id');
    }
    public function publicacao(){
        return $this->hasOne('App\Publicacao', 'id_animal','id');
    }
    public function usuario(){
        return $this->belongsToMany('App\Usuarios', 'publicacaos', 'id_animal', 'id_usuario');
    }
}

