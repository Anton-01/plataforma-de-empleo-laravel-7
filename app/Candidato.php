<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidato extends Model
{
    protected $fillable = [
        'nombre', 'telefono', 'email', 'cv', 'vacante_id', 'mensaje', 'vacante_slug'
    ];


}
