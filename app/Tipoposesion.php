<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipoposesion extends Model
{
    protected $table='tipoposesions';
    protected $fillable = ['tipoposesion'];
    
    public function posesions()
    {
        return $this->hasMany(Posesion::class);
    }

}
