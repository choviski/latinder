<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mensagem extends Model
{
    protected $table ="mensagems";
    protected $fillable = ['conteudo','id_remetente','id_destinatario','id_conversa'];
    use SoftDeletes;
    public function remetente(){
        return $this->belongsTo("App\Usuario",'id_remetente','id');
    }
    public function destinatario(){
        return $this->belongsTo("App\Usuario",'id_destinatario','id');
    }
    public function conversa(){
        return $this->belongsTo("App/Conversa","id_conversa","id");
    }
}
