<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $table = 'cargos';
    protected $fillable = ['cargo'];
    
    public function posesions()
    {
        return $this->hasMany(Posesion::class);
    }
}
