<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Planta extends Model
{
    protected $table = 'plantas';
    protected $fillable = ['planta'];
    
    public function posesions()
    {
        return $this->hasMany(Posesion::class);
    }
}
