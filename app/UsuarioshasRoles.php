<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsuarioshasRoles extends Model
{
    protected $fillable = ["idUsuario", "idRol", "nombreUsuario", "password", "estado"];
}
