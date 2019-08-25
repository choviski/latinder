<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cidade extends Model
{
    protected $table ="cidades";
    protected $fillable = ['nome','estado'];
    use SoftDeletes;
}
