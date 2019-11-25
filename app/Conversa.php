<?php

namespace App;

use Carbon\Traits\Timestamp;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Conversa extends Model
{
    protected $table ="conversas";
    protected $fillable = ['id_usuario','id_usuario2','id_publicacao'];
    public function mensagem(){
        return $this->hasOne('App\Mensagem', 'id_conversa','id');
    }
    public function publicacao(){
        return $this->belongsTo("App\Publicacao",'id_publicacao','id');
    }
    public function usuario(){
        return $this->belongsTo("App\Usuario",'id_usuario','id');
    }
    public function usuario2(){
        return $this->belongsTo("App\Usuario",'id_usuario2','id');
    }
}
