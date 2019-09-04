<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comentario extends Model
{
    protected $table ="comentarios";
    protected $fillable = ['id_usuario','id_publicacao','conteudo'];
    use SoftDeletes;
}
