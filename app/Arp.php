<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Arp extends Model
{
    protected $table = 'arps';
    protected $fillable = ['arp'];
    
    public function novedadnominas()
    {
        return $this->hasMany(Novedadnomina::class);
    }
}
