<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $table='municipios';
    protected $fillable = ['municipio','departamento_id'];
    
    public function personas()
    {
        return $this->hasMany(Persona::class);
    }

    public function departamento()
    {
        return $this->belongsTo(Departamento::class);
    }
}
