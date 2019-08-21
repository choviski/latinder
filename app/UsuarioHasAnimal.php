<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UsuarioHasAnimal extends Model
{
    protected $table ="usuariohasanimal";
    protected $fillable = ['id_usuarios','id_animais'];
    use SoftDeletes;
}
