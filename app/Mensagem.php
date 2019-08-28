<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mensagem extends Model
{
    protected $table ="mensagems";
    protected $fillable = ['conteudo','id_remetente','id_destinatario'];
    use SoftDeletes;
}
