<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Interesse extends Model
{
    protected $table ="interesse";
    protected $fillable = ['id_publicacao','id_usuario'];
    use SoftDeletes;
}
