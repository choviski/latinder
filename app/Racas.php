<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Racas extends Model
{
    protected $table ="raca";
    protected $fillable = ['nome','id_especie'];
    use SoftDeletes;
    public function especie(){
        return $this->belongsTo("App\Especie",'id_especie','id');
    }
    public function animal(){
        return $this->hasOne('App\Animal', 'id_raca','id');
    }
}
