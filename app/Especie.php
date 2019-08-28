<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Especie extends Model
{
    protected $table ="especie";
    protected $fillable = ['nome'];
    use SoftDeletes;
}
