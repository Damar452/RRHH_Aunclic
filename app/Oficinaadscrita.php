<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oficinaadscrita extends Model
{
    protected $table = 'oficinaadscritas';
    protected $fillable = ['oficinaadscrita']; 
    
    public function posesions()
    {
        return $this->hasMany(Posesion::class);
    }
}
