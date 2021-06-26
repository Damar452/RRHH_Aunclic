<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $table='departamentos';
    protected $fillable = ['departamento','paice_id'];
    
    public function personas()
    {
        return $this->hasMany(Persona::class);
    }

    public function municipios()
    {
        return $this->hasMany(Municipio::class);
    }

    public function paices()
    {
        return $this->belongsTo(Paice::class);
    }
}
