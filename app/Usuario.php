<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Usuario extends Model
{
    protected $table ="usuarios";
    protected $fillable = ['nome','login','email','senha','imagem'];
    use SoftDeletes;
}
