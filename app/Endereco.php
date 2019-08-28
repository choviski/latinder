<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Endereco extends Model
{
    protected $table ="endereco";
    protected $fillable = ['rua','bairro','cep','complemento','id_cidades'];
    use SoftDeletes;
}
