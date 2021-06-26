<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paice extends Model
{
    protected $table='paices';
    protected $fillable = ['paice'];
        
    public function personas()
    {
        return $this->hasMany(Persona::class);
    }

    public function departamentos()
    {
        return $this->hasMany(Departamento::class);
    }
}
