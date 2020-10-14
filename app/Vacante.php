<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacante extends Model
{
    protected $fillable = [
        'titulo','slug', 'categoria_id', 'plazas','rfc', 'experiencia_id',
        'ubicacion_id', 'salario_id','escolaridad', 'horario', 'rango', 'sexo', 'licencia', 'cartilla',
        'descripcion', 'actividades', 'habilidades'
    ];
    public function getRouteKeyName(){
        return 'slug';
    }

    public function categoria()
    {
        return $this->belongsTo(categoria::class);
    }
    public function salario()
    {
        return $this->belongsTo(Salario::class);
    }
    public function ubicacion()
    {
        return $this->belongsTo(Ubicacion::class);
    }
    public function experiencia()
    {
        return $this->belongsTo(Experiencia::class);
    }
    public function reclutador()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function candidatos(){
        return $this->hasMany(Candidato::class);
    }
}
