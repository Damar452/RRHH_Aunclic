<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $fillable = [
        'nombres', 
        'apellidos', 
        'tipodocumento_id', 
        'documento', 
        'expedicion_paice_id', 
        'expedicion_departamento_id', 
        'expedicion_municipio_id',
        'fechanacimiento',
        'residencia_paice_id',
        'residencia_departamento_id',
        'residencia_municipio_id',
        'direccion',
        'telefono',
        'sexo',
        'estadocivil_id',

    ];
    
    public function estadocivil()
    {
        return $this->belongsTo(Estadocivil::class);
    }

    public function tipodocumento()
    {
        return $this->belongsTo(Tipodocumento::class);
    }

    public function municipio()
    {
        return $this->belongsTo(municipio::class);
    }
    
    public function departamento()
    {
        return $this->belongsTo(Departamento::class);
    }

    public function pais()
    {
        return $this->belongsTo(Paice::class);
    }

    public function novedadnomina()
    {
        return $this->hasOne(Novedadnomina::class);
    }
    
    public function posesion()
    {
        return $this->hasOne(Posesion::class);
    }
}
