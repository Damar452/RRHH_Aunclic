<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estadocivil extends Model
{
    protected $table = 'estadocivils';
    protected $fillable = ['estadocivil'];
    
    public function personas()
    {
        return $this->hasMany(Persona::class);
    }
}
