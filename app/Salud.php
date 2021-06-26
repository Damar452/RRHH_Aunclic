<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salud extends Model
{
    protected $table = 'saluds';
    protected $fillable = ['salud'];
    
    public function novedadnominas()
    {
        return $this->hasMany(Novedadnomina::class);
    }
}
