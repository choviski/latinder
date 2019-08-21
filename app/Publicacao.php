<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Publicacao extends Model
{
    protected $table ="publicacao";
    protected $fillable = ['conteudo','id_usuario'];
    use SoftDeletes;
}
