<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipovinculacion extends Model
{
    protected $table = 'tipovinculacions';
    protected $fillable = ['tipovinculacion']; 
    
    public function posesions()
    {
        return $this->hasMany(Posesion::class);
    }
}
