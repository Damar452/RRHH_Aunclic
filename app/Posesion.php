<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posesion extends Model
{
    protected $fillable = [
        'tipoposesion_id', 
        'persona_id', 
        'numero', 
        'consecutivo',
        'fechaposesion', 
        'cargo_id', 
        'codigo_id', 
        'grado_id',
        'planta_id',
        'oficinaadscrita_id',
        'tipovinculacion_id',
        'fechaactoadministrativo',
        'tipoactoadministrativo_id',
        'actoadministrativo',
        'cabildo',
        'ubicacioncabildo',
        'fechaasamblea',
        'user_id',
        'fecha',

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

     public function persona()
    {
        return $this->belongsTo(Persona::class);
    }

     public function oficinaadscrita()
    {
        return $this->belongsTo(Oficinaadscrita::class);
    }

     public function codigo()
    {
        return $this->belongsTo(Codigo::class);
    }

     public function cargo()
    {
        return $this->belongsTo(Cargo::class);
    }

     public function planta()
    {
        return $this->belongsTo(Planta::class);
    }

     public function Grado()
    {
        return $this->belongsTo(Grado::class);
    }

     public function tipoposesion()
    {
        return $this->belongsTo(Clase::class);
    }

    public function tipoactoadministrativo()
    {
        return $this->belongsTo(Tipoactoadministrativo::class);
    }

     public function tipovinclacion()
    {
        return $this->belongsTo(Tipovinclacion::class);
    }
}
