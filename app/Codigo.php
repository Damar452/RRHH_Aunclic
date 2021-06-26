<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Codigo extends Model
{
    protected $table = 'codigos';
    protected $fillable = ['codigo'];
    
    public function posesions()
    {
        return $this->hasMany(Posesion::class);
    }
}
