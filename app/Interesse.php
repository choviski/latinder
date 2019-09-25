<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Interesse extends Model
{
    protected $table ="interesses";
    protected $fillable = ['id_publicacao','id_usuario'];
    use SoftDeletes;
    public function publicacao(){
        return $this->belongsTo("App\Publicacao",'id_publicacao','id');
    }
}
