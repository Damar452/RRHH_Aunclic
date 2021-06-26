<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pension extends Model
{
    protected $table = 'pensions';
    protected $fillable = ['pension'];
    
    public function novedadnominas()
    {
        return $this->hasMany(Novedadnomina::class);
    }
}
