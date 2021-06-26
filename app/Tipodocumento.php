<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipodocumento extends Model
{
    protected $table='tipodocumentos';
    protected $fillable = ['tipodocumento'];

    public function personas()
    {
        return $this->hasMany(Persona::class);
    }
}
