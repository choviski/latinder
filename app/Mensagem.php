<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mensagem extends Model
{
    protected $table ="mensagem";
    protected $fillable = ['conteudo','id_remetente','id_detinatario'];
    use SoftDeletes;
}
