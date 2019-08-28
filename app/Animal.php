<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Animal extends Model
{
    protected $table ="animal";
    protected $fillable = ['nome','pelagem','vacinacao','porte','sexo','castracao','idade','imagem','descricao',
        'cor','id_raca','id_endereco'];
    use SoftDeletes;
}
