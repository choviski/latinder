<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Racas extends Model
{
    protected $table ="racas";
    protected $fillable = ['nome','id_especies'];
    use SoftDeletes;
}
