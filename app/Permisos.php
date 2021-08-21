<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permisos extends Model
{
    protected $fillable = ["modulo", "accion", "descripcion"];
}
