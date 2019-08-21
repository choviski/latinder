<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsuarioHasUsuario extends Model
{
    protected $table="usuario_has_usuario";
    protected $fillable=["id_usuario","id_usuario2"
        ];
}
