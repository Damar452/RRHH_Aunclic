<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipoactoadministrativo extends Model
{
    protected $table = 'tipoactoadministrativos';
    protected $fillable = ['tipoactoadministrativo']; 
    
    public function posesions()
    {
        return $this->hasMany(Posesion::class);
    }
}
