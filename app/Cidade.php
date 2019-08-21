<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cidade extends Model
{
    protected $table ="cidade";
    protected $fillable = ['nome','estado'];
    use SoftDeletes;
}
