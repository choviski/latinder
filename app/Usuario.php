<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Usuario extends Model
{
    protected $table ="usuario";
    protected $fillable = ['nome','login','email','senha','foto'];
    use SoftDeletes;
}
