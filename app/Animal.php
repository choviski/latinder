<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Animal extends Model
{
    protected $table ="animals";
    protected $fillable = ['nome','pelagem','vacinacao','porte','sexo','catracao','idade','imagem','descricao',
        'cor','id_racas','id_endereco'];
    use SoftDeletes;
}
